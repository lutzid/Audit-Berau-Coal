<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

function insertDept($dept) {
    DB::table('departments')->insert([
        'name' => $dept,
        'created_at' => Carbon::now('Asia/Jakarta'),
        'updated_at' => Carbon::now('Asia/Jakarta')
    ]); 
}

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        insertDept('Accounting & Financial Control');
        insertDept('Asset & Facility Infrasstructure Mtc');
        insertDept('Bank & Trade Finance');
        insertDept('Board of Directors');
        insertDept('Budget Control');
        insertDept('Business Analyst Specialist');
        insertDept('C & B Strategic');
        insertDept('Cash Management');
        insertDept('Coal Handling Infr');
        insertDept('Community Base Development');
        insertDept('Community Enterprise Development');
        insertDept('Compensation Ben & Jkt Office Rep');
        insertDept('Contractor Management');
        insertDept('Corporate Affairs & Gov.Relation');
        insertDept('Corporate Development Program');
        insertDept('Corporate Legal & Operations');
        insertDept('Corporate Secretary');
        insertDept('Corporate Support');
        insertDept('Electrical Project Improvement');
        insertDept('Emergency Response & Services');
        insertDept('Environment');
        insertDept('External Relation');
        insertDept('Financial Controlling');
        insertDept('Financial Planning & Management Reporting');
        insertDept('Financial Reporting');
        insertDept('Fixed Plant Maintenance');
        insertDept('General Service Operation');
        insertDept('Geology & Exploration');
        insertDept('Geotechnic & Hydrology');
        insertDept('HRIS & Big Data Analytics');
        insertDept('HSE Certification & Training');
        insertDept('Human Resource Operation');
        insertDept('Industrial Relation');
        insertDept('Internal Audit');
        insertDept('IT Infrastructure & Project Dev Group');
        insertDept('Knowledge Management System');
        insertDept('Land Aqcuisition & Management');
        insertDept('Legal Mining');
        insertDept('Legal Operation');
        insertDept('License');
        insertDept('Logistic');
        insertDept('Long Term Mine Plan');
        insertDept('Management Information System');
        insertDept('Management Reporting');
        insertDept('Marine Support & Admin');
        insertDept('Marketing & Sales');
        insertDept('Mine Closure');
        insertDept('Mine Operation');
        insertDept('Occupational Helath & Safety');
        insertDept('Operation Compliance');
        insertDept('Payroll');
        insertDept('Planning & Budget Control');
        insertDept('Port & Barging Operation');
        insertDept('Procurement');
        insertDept('Product Quality & Delivery Control');
        insertDept('Public Relation');
        insertDept('Safety Operation');
        insertDept('Security');
        insertDept('Shared Service Unit');
        insertDept('Shipping');
        insertDept('Short Term Mine Plan');
        insertDept('Supporting Infrastructure Dev');
        insertDept('Surveying & Geospatial Information');
        insertDept('System Development');
        insertDept('Talent Acquisition & Assessment Centre');
        insertDept('Tax Operation & Gov.Lialitities');
        insertDept('Tax Strategy Compliance & Ligitation');
        insertDept('Vendor Qualification');
        //
    }
}
