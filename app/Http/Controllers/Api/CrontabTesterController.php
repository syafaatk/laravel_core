<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\DB;
use App\Models\Master\Hrm\HrPeriod;
use App\Models\Sales\SalesSelling;
use App\Models\Sales\SalesSellingReportOmset;
use App\Models\Sales\SalesSellingReportOmsetFinance;
use App\Models\Sales\SalesSellingReportOmsetRanking;

use App\Models\Sales\SalesSellingPunishment;
use App\Models\Sales\SalesSellingReportAchievement;
use App\Models\Sales\SalesSellingReportAchievementPersonal;

class CrontabTesterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      // $this->middleware('auth');
    }

    /**
     * Show list HrPeriod.
     *
     * @return Response JSON
     */
    public function find()
    {

    	$type = ['Retail','Coorporate','Advertising'];
    	$query = "";
    	foreach($type as $data){
    		$field = strtolower($data);
    		$query .= "SUM(
    		IF((sales_selling_type = '$data' AND sales_selling_status_client = 'Piutang'),sales_selling_price_grandtotal,0)
    		) AS grandtotal_credit_$field,
    		SUM(
    		IF((sales_selling_type = '$data' AND sales_selling_status_client = 'Lunas'),sales_selling_price_grandtotal,0)
    		) AS grandtotal_paid_off_$field,
    		SUM(
    		IF((sales_selling_type = '$data' AND sales_selling_status_client = 'Progress'),sales_selling_price_grandtotal,0)
    		) AS grandtotal_order_list_$field,
    		SUM(
    		IF((sales_selling_type = '$data' AND sales_selling_status_client = 'Verified'),sales_selling_price_grandtotal,0)
    		) AS grandtotal_verified_$field,
    		SUM(
    		IF((sales_selling_type = '$data' AND (sales_selling_status_client = 'Piutang' OR sales_selling_status_client = 'Lunas' OR sales_selling_status_client = 'Progress' OR sales_selling_status_client = 'Verified')),sales_selling_price_grandtotal,0)) AS grandtotal_all_$field,
    		SUM(
    		IF((sales_selling_type = '$data' AND sales_selling_status_client = 'Verified'),1,NULL)
    	) AS count_all_$field,";
        /*
        */
      }

      $query = substr($query,0,-1);

      $findSellingOmset = SalesSelling::select('sales_selling_order', DB::raw($query))
      ->where('deleted_at',NULL)
      ->groupBy('sales_selling_order');

      $findSellingOmset = $findSellingOmset->get();

      foreach ($findSellingOmset as $key => $omset) {

      	$date= date('Y-m-d', strtotime($omset->sales_selling_order));

      	$findReportOmset = SalesSellingReportOmset::where('sales_selling_report_omset_date', $date);
      	$reportOmsets = $findReportOmset->get();

      	$checkOmsetType = [];
      	foreach ($reportOmsets as $key => $reportOmset) {
      		$checkOmsetType[] = strtolower($reportOmset->sales_selling_report_omset_type);
      		$type = strtolower($reportOmset->sales_selling_report_omset_type);

      		$reportOmset->sales_selling_report_omset_gt_order_list = $omset->{"grandtotal_order_list_$type"};
      		$reportOmset->sales_selling_report_omset_gt_credit = $omset->{"grandtotal_credit_$type"}; 
      		$reportOmset->sales_selling_report_omset_gt_paid_off = $omset->{"grandtotal_paid_off_$type"};
      		$reportOmset->sales_selling_report_omset_gt_verified = $omset->{"grandtotal_verified_$type"};
      		$reportOmset->sales_selling_report_omset_gt_all = $omset->{"grandtotal_all_$type"};
      		$reportOmset->save();
      	}


      	foreach (['retail','coorporate','advertising'] as $type) {
      		if (!in_array($type, $checkOmsetType)) {
      			SalesSellingReportOmset::create([
      				'sales_selling_report_omset_date' => $date,
      				'sales_selling_report_omset_type' => ucwords($type),
      				'sales_selling_report_omset_gt_order_list' => $omset->{"grandtotal_order_list_$type"},
      				'sales_selling_report_omset_gt_credit' => $omset->{"grandtotal_credit_$type"},
      				'sales_selling_report_omset_gt_paid_off' => $omset->{"grandtotal_paid_off_$type"},
      				'sales_selling_report_omset_gt_verified' => $omset->{"grandtotal_verified_$type"},
      				'sales_selling_report_omset_gt_all' => $omset->{"grandtotal_all_$type"},
      			]);
      		}
      	}

      }

      $findSellingOmset = SalesSelling::select('sales_selling_paid_date', DB::raw($query))
      ->where('deleted_at',NULL)
      ->groupBy('sales_selling_paid_date');

      $findSellingOmset = $findSellingOmset->get();

      foreach ($findSellingOmset as $key => $omset) {

      	$date= date('Y-m-d', strtotime($omset->sales_selling_paid_date));

      	$findReportOmset = SalesSellingReportOmsetFinance::where('sales_selling_report_omset_date', $date);
      	$reportOmsets = $findReportOmset->get();

      	$checkOmsetType = [];
      	foreach ($reportOmsets as $key => $reportOmset) {
      		$checkOmsetType[] = strtolower($reportOmset->sales_selling_report_omset_type);
      		$type = strtolower($reportOmset->sales_selling_report_omset_type);

      		$reportOmset->sales_selling_report_omset_gt_order_list = $omset->{"grandtotal_order_list_$type"};
      		$reportOmset->sales_selling_report_omset_gt_credit = $omset->{"grandtotal_credit_$type"}; 
      		$reportOmset->sales_selling_report_omset_gt_paid_off = $omset->{"grandtotal_paid_off_$type"};
      		$reportOmset->sales_selling_report_omset_gt_verified = $omset->{"grandtotal_verified_$type"};
      		$reportOmset->sales_selling_report_omset_gt_all = $omset->{"grandtotal_all_$type"};
      		$reportOmset->save();
      	}

      	foreach (['retail','coorporate','advertising'] as $type) {
      		if (!in_array($type, $checkOmsetType)) {
      			SalesSellingReportOmsetFinance::create([
      				'sales_selling_report_omset_date' => $date,
      				'sales_selling_report_omset_type' => ucwords($type),
      				'sales_selling_report_omset_gt_order_list' => $omset->{"grandtotal_order_list_$type"},
      				'sales_selling_report_omset_gt_credit' => $omset->{"grandtotal_credit_$type"},
      				'sales_selling_report_omset_gt_paid_off' => $omset->{"grandtotal_paid_off_$type"},
      				'sales_selling_report_omset_gt_verified' => $omset->{"grandtotal_verified_$type"},
      				'sales_selling_report_omset_gt_all' => $omset->{"grandtotal_all_$type"},
      			]);
      		}
      	}

      }

      $findSellingOmset = SalesSelling::select('sales_selling_paid_date','master_salesman_id', DB::raw($query))
      ->where('deleted_at',NULL)
      ->groupBy('sales_selling_paid_date','master_salesman_id');

      $findSellingOmset = $findSellingOmset->get();

      foreach ($findSellingOmset as $key => $omset) {

      	$date= date('Y-m-d', strtotime($omset->sales_selling_paid_date));

      	$findReportOmset = SalesSellingReportOmsetRanking::where('master_salesman_id', $omset->master_salesman_id)
      	->where('sales_selling_report_omset_date', $date);

      	$reportOmsets = $findReportOmset->get();

      	$checkOmsetType = [];
      	foreach ($reportOmsets as $key => $reportOmset) {
      		$checkOmsetType[] = strtolower($reportOmset->sales_selling_report_omset_type);
      		$type = strtolower($reportOmset->sales_selling_report_omset_type);

      		$reportOmset->master_salesman_id = $omset->master_salesman_id;
      		$reportOmset->sales_selling_report_omset_count_spk = $omset->{"count_all_$type"};
      		$reportOmset->sales_selling_report_omset_gt_order_list = $omset->{"grandtotal_order_list_$type"};
      		$reportOmset->sales_selling_report_omset_gt_credit = $omset->{"grandtotal_credit_$type"}; 
      		$reportOmset->sales_selling_report_omset_gt_paid_off = $omset->{"grandtotal_paid_off_$type"};
      		$reportOmset->sales_selling_report_omset_gt_verified = $omset->{"grandtotal_verified_$type"};
      		$reportOmset->sales_selling_report_omset_gt_all = $omset->{"grandtotal_all_$type"};
      		$reportOmset->save();
      	}

      	foreach (['retail','coorporate','advertising'] as $type) {
      		if (!in_array($type, $checkOmsetType)) {
      			SalesSellingReportOmsetRanking::create([
      				'sales_selling_report_omset_date' => $date,
      				'master_salesman_id' => $omset->master_salesman_id,
      				'sales_selling_report_omset_type' => ucwords($type),
      				'sales_selling_report_omset_count_spk' => $omset->{"count_all_$type"},
      				'sales_selling_report_omset_gt_order_list' => $omset->{"grandtotal_order_list_$type"},
      				'sales_selling_report_omset_gt_credit' => $omset->{"grandtotal_credit_$type"},
      				'sales_selling_report_omset_gt_paid_off' => $omset->{"grandtotal_paid_off_$type"},
      				'sales_selling_report_omset_gt_verified' => $omset->{"grandtotal_verified_$type"},
      				'sales_selling_report_omset_gt_all' => $omset->{"grandtotal_all_$type"},
      			]);
      		}
      	}

      }

      $type = ['Retail','Coorporate','Advertising'];
      $query = "";
      foreach($type as $data){
      	$field = strtolower($data);
      	$query .= "(
      	SELECT COALESCE(COUNT(sales_selling_id),0)
      	FROM sales_selling
      	WHERE
      	sales_selling_paid_date BETWEEN period.hr_period_start AND period.hr_period_end
      	AND sales_selling_type = '$data'
      	AND sales_selling_status_client = 'Verified'
      	AND sales_selling.deleted_at IS NULL
      	) AS total_spk_$field,
      	(
      	SELECT COALESCE(SUM(sales_selling_price_grandtotal),0)
      	FROM sales_selling
      	WHERE
      	sales_selling_paid_date BETWEEN period.hr_period_start AND period.hr_period_end
      	AND sales_selling_type = '$data'
      	AND sales_selling_status_client = 'Verified'
      	AND sales_selling.deleted_at IS NULL
      	) AS total_turnover_$field,
      	(
      	SELECT COALESCE(SUM(sales_selling_punishment_total_value),0)
      	FROM sales_selling_punishment
      	JOIN sales_selling USING(sales_selling_id)
      	WHERE
      	sales_selling_punishment_date BETWEEN period.hr_period_start AND period.hr_period_end
      	AND sales_selling_type = '$data'
      	AND sales_selling_punishment.deleted_at IS NULL
      	AND sales_selling.deleted_at IS NULL
      	) AS total_punishment_$field,
      	(
      	SELECT COALESCE(COUNT(sales_selling_complain_id),0)
      	FROM sales_selling_complain
      	JOIN sales_selling USING(sales_selling_id)
      	WHERE
      	sales_selling_complain_date BETWEEN period.hr_period_start AND period.hr_period_end
      	AND sales_selling_type = '$data'
      	AND sales_selling_complain.deleted_at IS NULL
      	AND sales_selling.deleted_at IS NULL
      ) AS total_complain_$field,";
        /*
        */
      }

      $query = substr($query,0,-1);

      $reportByPeriod = DB::table('hr_period as period')->select('period.*', DB::raw("$query"));

      // print_r($reportByPeriod->toSql());
      // print_r($reportByPeriod->getBindings());

      $reportByPeriod = $reportByPeriod->get();

      // json_encode($reportByPeriod, JSON_PRETTY_PRINT);

      $query               = [];
      $query['punishment'] = [];
      $query['turnover']   = [];

      foreach ($reportByPeriod as $key => $omset) {

      	$query['punishment'][$omset->hr_period_id] = [];
      	$query['punishment'][$omset->hr_period_id] = SalesSellingPunishment::select('users.name','users.id','users.master_employee_id',
      		DB::raw("
      			COALESCE(SUM(IF((sales_selling_type = 'Retail'),sales_selling_punishment_total_value,0)),0) AS total_punishment_retail,
      			COALESCE(SUM(IF((sales_selling_type = 'Coorporate'),sales_selling_punishment_total_value,0)),0) AS total_punishment_coorporate,
      			COALESCE(SUM(IF((sales_selling_type = 'Advertising'),sales_selling_punishment_total_value,0)),0) AS total_punishment_advertising
      			")
      	)
      	->join('sales_selling','sales_selling_punishment.sales_selling_id','sales_selling.sales_selling_id')
      	->join('users','sales_selling_punishment.master_employee_id','users.master_employee_id')
      	->whereBetween('sales_selling_punishment_date', [$omset->hr_period_start, $omset->hr_period_end])
      	->where('sales_selling_punishment.deleted_at',NULL)
      	->where('sales_selling.deleted_at',NULL)
      	->groupBy('users.id')
      	->get();

      	$query['turnover'][$omset->hr_period_id] = [];
      	$query['turnover'][$omset->hr_period_id]   = SalesSellingReportOmsetRanking::select('users.name','users.id','users.master_employee_id',
      		DB::raw("
      			COALESCE(SUM(IF((sales_selling_report_omset_type = 'Retail'),sales_selling_report_omset_gt_verified,0)),0) AS total_turnover_retail,
      			COALESCE(SUM(IF((sales_selling_report_omset_type = 'Retail'),sales_selling_report_omset_count_spk,0)),0) AS total_spk_retail,
      			COALESCE(SUM(IF((sales_selling_report_omset_type = 'Coorporate'),sales_selling_report_omset_gt_verified,0)),0) AS total_turnover_coorporate,
      			COALESCE(SUM(IF((sales_selling_report_omset_type = 'Coorporate'),sales_selling_report_omset_count_spk,0)),0) AS total_spk_coorporate,
      			COALESCE(SUM(IF((sales_selling_report_omset_type = 'Advertising'),sales_selling_report_omset_gt_verified,0)),0) AS total_turnover_advertising,
      			COALESCE(SUM(IF((sales_selling_report_omset_type = 'Advertising'),sales_selling_report_omset_count_spk,0)),0) AS total_spk_advertising
      			")
      	)
      	->join('users','sales_selling_report_omset_ranking.master_salesman_id','users.master_sales_id')
      	->whereBetween('sales_selling_report_omset_date', [$omset->hr_period_start, $omset->hr_period_end])
      	->groupBy('users.id')
      	->get();

        // echo $query['punishment'][$omset->hr_period_id]->toSql();
        // echo $query['turnover'][$omset->hr_period_id]->toSql();

      	$findReportAchievement = SalesSellingReportAchievement::where('hr_period_id', $omset->hr_period_id);

      	$reportAchievement = $findReportAchievement->get();

      	$checkOmsetType = [];
      	foreach ($reportAchievement as $key => $achievement) {
      		$checkOmsetType[] = strtolower($achievement->sales_selling_report_achievement_type);
      		$type = strtolower($achievement->sales_selling_report_achievement_type);
      		$achievement->sales_selling_report_achievement_spk        = $omset->{"total_spk_$type"};
      		$achievement->sales_selling_report_achievement_turnover   = $omset->{"total_turnover_$type"};
      		$achievement->sales_selling_report_achievement_punishment = $omset->{"total_punishment_$type"}; 
      		$achievement->sales_selling_report_achievement_complain   = $omset->{"total_complain_$type"};
      		$achievement->save();
      	}

      	foreach (['retail','coorporate','advertising'] as $type) {
      		if (!in_array($type, $checkOmsetType)) {
      			$data = SalesSellingReportAchievement::create([
      				'hr_period_id'                                => $omset->hr_period_id,
      				'sales_selling_report_achievement_type'       => ucwords($type),
      				'sales_selling_report_achievement_spk'        => $omset->{"total_spk_$type"},
      				'sales_selling_report_achievement_turnover'   => $omset->{"total_turnover_$type"},
      				'sales_selling_report_achievement_punishment' => $omset->{"total_punishment_$type"},
      				'sales_selling_report_achievement_complain'   => $omset->{"total_complain_$type"},
      			]);

      		}
      	}

      }

      $users = [];

      foreach ($reportByPeriod as $key => $omset) {
      	foreach ($query['punishment'][$omset->hr_period_id] as $punishment) {
      		foreach (['retail','coorporate','advertising'] as $type) {
      			if (!in_array($omset->hr_period_id . $type . $punishment->id, $users)) {
      				// insert
      				$users[$omset->hr_period_id . $type . $punishment->id] = [
      					'hr_period_id'                                         => $omset->hr_period_id,
      					'user_id'                                              => $punishment->id,
                'name'                                              => $punishment->name,
      					'sales_selling_report_achievement_personal_type'       => ucwords($type),
      					'sales_selling_report_achievement_personal_spk'        => 0,
      					'sales_selling_report_achievement_personal_turnover'   => 0,
      					'sales_selling_report_achievement_personal_punishment' => (int)$punishment->{"total_punishment_$type"},
      				];
      			}
      		}
      	}

      	foreach ($query['turnover'][$omset->hr_period_id] as $turnover) {
      		foreach (['retail','coorporate','advertising'] as $type) {
      			if (!in_array($omset->hr_period_id . $type . $turnover->id, $users)) {
      				// insert
              $old = @$users[$omset->hr_period_id . $type . $turnover->id];
      				$users[$omset->hr_period_id . $type . $turnover->id] = [
                'hr_period_id'                                         => $omset->hr_period_id,
      					'user_id'                                              => $turnover->id,
                'name'                                                 => $turnover->name,
      					'sales_selling_report_achievement_personal_type'       => ucwords($type),
      					'sales_selling_report_achievement_personal_spk'        => (int)@$turnover->{"total_spk_$type"},
      					'sales_selling_report_achievement_personal_turnover'   => (int)@$turnover->{"total_turnover_$type"},
      					'sales_selling_report_achievement_personal_punishment' => (int)@$old['sales_selling_report_achievement_personal_punishment'],
      				];
      			} else {
      				// update
      				$old = @$users[$omset->hr_period_id . $type . $turnover->id];
      				$users[$omset->hr_period_id . $type . $turnover->id] = [
                'hr_period_id'                                         => $omset->hr_period_id,
      					'user_id'                                              => $turnover->id,
                'name'                                                 => $turnover->name,
      					'sales_selling_report_achievement_personal_type'       => ucwords($type),
      					'sales_selling_report_achievement_personal_spk'        => (int)@$turnover->{"total_spk_$type"},
      					'sales_selling_report_achievement_personal_turnover'   => (int)@$turnover->{"total_turnover_$type"},
      					'sales_selling_report_achievement_personal_punishment' => (int)@$old['sales_selling_report_achievement_personal_punishment'],
      				];
      			}
      		}
      	}
      }

      foreach ($users as $key => $personal) {

      	$achievementPersonal = SalesSellingReportAchievementPersonal::where('hr_period_id', $personal['hr_period_id'])
      	->where('user_id', $personal['user_id'])
      	->where('sales_selling_report_achievement_personal_type', $personal['sales_selling_report_achievement_personal_type']);

      	$countPersonal = $achievementPersonal->count();
      	$reportOmset = $achievementPersonal->first();

      	if ($countPersonal==1) {
      		$reportOmset->sales_selling_report_achievement_personal_spk = $personal['sales_selling_report_achievement_personal_spk'];
      		$reportOmset->sales_selling_report_achievement_personal_turnover = $personal['sales_selling_report_achievement_personal_turnover'];
      		$reportOmset->sales_selling_report_achievement_personal_punishment = $personal['sales_selling_report_achievement_personal_punishment'];
      		$reportOmset->save();

      	} else {

      		SalesSellingReportAchievementPersonal::create([
      			'hr_period_id'                                         => $personal['hr_period_id'],
      			'user_id'                                              => $personal['user_id'],
      			'sales_selling_report_achievement_personal_type'       => $personal['sales_selling_report_achievement_personal_type'],
      			'sales_selling_report_achievement_personal_spk'        => $personal['sales_selling_report_achievement_personal_spk'],
      			'sales_selling_report_achievement_personal_turnover'   => $personal['sales_selling_report_achievement_personal_turnover'],
      			'sales_selling_report_achievement_personal_punishment' => $personal['sales_selling_report_achievement_personal_punishment'],
      		]);

      	}
      }

      return response()->json(['error' => false, 'messages' => $users]);
    }
  }
