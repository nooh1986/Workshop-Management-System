<?php

namespace App\Interfaces;


interface StatementRepositoryInterface
{
    public function monthly();

    public function monthly_salaries($request);

    public function employee();

    public function employee_salaries($request);

    public function corporate();

    public function corporate_account($request);
}