<?php

namespace App\Providers;

use App\Repository\CutRepository;
use App\Repository\AbsenceRepository;
use App\Repository\CompanyRepository;
use App\Repository\ExpenseRepository;
use App\Repository\PaymentRepository;
use App\Repository\ProfileRepository;
use App\Repository\EmployeeRepository;
use App\Repository\OverTimeRepository;
use App\Repository\StatementRepository;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\CutRepositoryInterface;
use App\Repository\EmployeePaymentRepository;
use App\Interfaces\AbsenceRepositoryInterface;
use App\Interfaces\CompanyRepositoryInterface;
use App\Interfaces\ExpenseRepositoryInterface;
use App\Interfaces\PaymentRepositoryInterface;
use App\Interfaces\ProfileRepositoryInterface;
use App\Interfaces\EmployeeRepositoryInterface;
use App\Interfaces\OverTimeRepositoryInterface;
use App\Interfaces\StatementRepositoryInterface;
use App\Interfaces\EmployeePaymentRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CompanyRepositoryInterface::class, CompanyRepository::class);
        $this->app->bind(ExpenseRepositoryInterface::class, ExpenseRepository::class);
        $this->app->bind(CutRepositoryInterface::class, CutRepository::class);
        $this->app->bind(PaymentRepositoryInterface::class, PaymentRepository::class);
        $this->app->bind(EmployeeRepositoryInterface::class, EmployeeRepository::class);
        $this->app->bind(EmployeePaymentRepositoryInterface::class, EmployeePaymentRepository::class);
        $this->app->bind(OverTimeRepositoryInterface::class, OverTimeRepository::class);
        $this->app->bind(AbsenceRepositoryInterface::class, AbsenceRepository::class);
        $this->app->bind(StatementRepositoryInterface::class, StatementRepository::class);
        $this->app->bind(ProfileRepositoryInterface::class, ProfileRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
