<?php

class Migration
{
    public static $command = 'migration';

    public static $description = 'Run database migrations';

    public static $arguments = [
        '[action]' => 'Action: run, create-migration, rollback, rollback-all, refresh, status',
        '[name]'   => 'Migration class name for create-migration',
    ];

    protected static $route_map = [
        'run'              => 'migrate',
        'create-migration' => 'create-migration',
        'rollback'         => 'rollback',
        'rollback-all'    => 'rollback-all',
        'refresh'          => 'refresh',
        'status'           => 'status',
    ];

    public function handle($input = null, array $flags = [])
    {
        $action = $input ?? 'run';

        if (!isset(static::$route_map[$action])) {
            echo "Unknown migration action: \"{$action}\"" . PHP_EOL;
            echo "Available migration actions: " . implode(', ', array_keys(static::$route_map)) . PHP_EOL;
            exit(1);
        }

        if ($action === 'create-migration') {
            global $argv;

            $name = $argv[3] ?? null;

            if (!$name) {
                echo "Migration name is required." . PHP_EOL;
                echo "Example: php lava migration create-migration create_products_table" . PHP_EOL;
                exit(1);
            }

            $route = 'create-migration/' . $name;
        } else {
            $route = static::$route_map[$action];
        }

        $index = PUBLIC_DIR . 'index.php';

        if (!file_exists($index)) {
            echo "index.php not found at: {$index}" . PHP_EOL;
            exit(1);
        }

        $command = sprintf(
            'php %s %s',
            escapeshellarg($index),
            escapeshellarg($route)
        );

        passthru($command);
    }
}
