<?php

declare(strict_types=1);

namespace App;

if (! function_exists('format_dns_type')) {
    function format_dns_type(array $dnsRecord): string
    {
        return match ($dnsRecord['type']) {
            'A' => (string) $dnsRecord['ip'],
            'AAAA' => (string) $dnsRecord['ipv6'],
            'MX' => "{$dnsRecord['target']} / PRI {$dnsRecord['pri']}",
            'NS' => (string) $dnsRecord['target'],
            'SOA' => "{$dnsRecord['mname']} / SN {$dnsRecord['serial']}",
            'TXT' => (string) $dnsRecord['txt'],
            default => (string) $dnsRecord['type']
        };
    }
}
