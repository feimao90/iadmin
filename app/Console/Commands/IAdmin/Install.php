<?php

namespace App\Console\Commands\IAdmin;

use Illuminate\Console\Command;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'iadmin:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '安装系统';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $email = $this->ask('请输入管理员邮箱账号:', 'admin@admin.com');

        $password = $this->secret('请输入账号密码:');

        //创建数据库
        $this->call('migrate');

        //创建数据

    }
}
