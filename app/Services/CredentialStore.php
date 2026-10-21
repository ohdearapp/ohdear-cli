<?php

namespace App\Services;

class CredentialStore
{
    private string $configPath;

    public function __construct()
    {
        if (isset($_SERVER['OHDEAR_CONFIG_FILE_PATH'])) {
            $this->configPath = $_SERVER['OHDEAR_CONFIG_FILE_PATH'];
        } else {
            $home = $_SERVER['HOME'] ?? $_SERVER['USERPROFILE'] ?? '';

            $this->configPath = "{$home}/.ohdear/config.json";
        }
    }

    public function getToken(): ?string
    {
        if (! file_exists($this->configPath)) {
            return null;
        }

        $data = json_decode(file_get_contents($this->configPath), true);

        return $data['token'] ?? null;
    }

    public function setToken(string $token): void
    {
        $this->ensureConfigDirectoryExists();

        $data = $this->readConfig();
        $data['token'] = $token;

        $this->writeConfig(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    }

    public function flush(): void
    {
        $this->ensureConfigDirectoryExists();

        $this->writeConfig(json_encode((object) [], JSON_PRETTY_PRINT));
    }

    private function ensureConfigDirectoryExists(): void
    {
        $directory = dirname($this->configPath);

        if (! is_dir($directory)) {
            mkdir($directory, 0700, true);
        }
    }

    private function writeConfig(string $contents): void
    {
        // Restrict permissions before writing so the token is never readable by other users.
        touch($this->configPath);
        chmod($this->configPath, 0600);

        file_put_contents($this->configPath, $contents, LOCK_EX);
    }

    /** @return array<string, mixed> */
    private function readConfig(): array
    {
        if (! file_exists($this->configPath)) {
            return [];
        }

        return json_decode(file_get_contents($this->configPath), true) ?? [];
    }
}
