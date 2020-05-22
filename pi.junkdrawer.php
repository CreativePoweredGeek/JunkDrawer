<?php
class Junkdrawer
{
    public $return_data = '';
    
    public function __construct()
    {
		//$parameter = ee()->TMPL->fetch_param('type');
		$this->return_data = ee()->TMPL->tagdata;
	}
	
	
	public function bulk_update_status()
	{
		//Paramaters
		//channel_id - Get the channel ID from the Developers -> Channels
		//status - Options open/closed
		
		//Use: {exp:kcdatatools:bulk_update_status channel_id="" status=""}
		
		$channel_id = ee()->TMPL->fetch_param('channel_id');
		$status = (ee()->TMPL->fetch_param('status') == 'open') ? FALSE : TRUE;
		$date = ee()->TMPL->fetch_param('date');
		if($status == 'open') {
			$status_id = '1';
		} elseif( $status == 'closed') {
			$status_id = '2';
		} else {
			echo 'Currently this only supports open/closed statuses.';
			exit;
		}
		 
		$data = array(
		    'status' => $status,
		    'status_id' => $status_id,
		    'edit_date' => $date
		);
		
		ee()->db->where('channel_id', $channel_id);
		ee()->db->update('exp_channel_titles', $data);
		return 'done';
	}
	public function randomnumber()
	{
		// Parameters:
		// min = minimum number of characters
		// max = maximum number of characters
		// Use = {exp:kc_datatools:randomnumber min="" max=""}
		// If min & max are not specified, default to 6 & 10
		
		$min = (ee()->TMPL->fetch_param('min') == '6') ? FALSE : TRUE;
		$max = (ee()->TMPL->fetch_param('max') == '10') ? FALSE : TRUE;
		
		$random = mt_rand($min,$max);
		return $random;
       
	}

}
