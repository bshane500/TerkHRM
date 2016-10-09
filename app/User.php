<?php

	namespace App;

	use App\Models\BankDetail;
	use App\models\Branch;
	use App\models\Department;
	use App\Models\EmergencyContact;
	use App\Models\JobTitle;
	use App\models\Leave;
    use App\Models\Photo;
    use Carbon\Carbon;
	use Illuminate\Foundation\Auth\User as Authenticatable;
	use Zizaco\Entrust\Traits\EntrustUserTrait;

	/**
	 * Class User
	 * @package App
	 */
	class User extends Authenticatable
	{
		use EntrustUserTrait;
		/**
		 * The attributes that are mass assignable.
		 *
		 * @var array
		 */
		protected $with = ['roles','bankDetails'];
		protected $fillable =
			[
				'first_name',
				'email',
				'password',
				'last_name',
				'other_names',
				'branch_id',
				'department_id',
                'job_title_id',
				'date_of_birth',
				'phone_number',
                'avatar'
			];
		//protected $dates = ['date_of_birth'];

		/**
		 * The attributes excluded from the model's JSON form.
		 *
		 * @var array
		 */
		protected $hidden = [
			'password', 'remember_token',
		];
		//protected $with = ['leaveR'];

		/**
		 * @param $value
		 */

		public function setPasswordAttribute($value)
		{
			$this->attributes['password'] = bcrypt($value);
		}

		/*public function getDateOfBirthAttribute($date)
		{
			return $this->attributes['date_of_birth'] = Carbon::parse('Y-m-d',$date);
		}*/

		public function jobTitle()
		{
			$this->hasOne(JobTitle::class,'id','job_title_id');
		}

		/**
		 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
		 */
		public function branches()
		{
			return $this->belongsTo(Branch::class, 'branch_id');
		}

		/**
		 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
		 */
		public function departments()
		{
			return $this->belongsTo(Department::class, 'department_id');
		}

		/**
		 * @return \Illuminate\Database\Eloquent\Relations\HasMany
		 */
		public function leaveRequest()
		{
			return $this->hasMany(Leave::class, 'id', 'employee_id');
		}


		/**
		 * @return string
		 */
		public function getFullNameAttribute()
		{
			return $this->first_name . " " . $this->last_name;
		}


		/**
		 * @return mixed
		 */
		public function getRolesListAttribute()
		{
			return $this->roles->lists('id')->toArray();
		}

		/**
		 * @return string
		 */
		public function getUsernameAttribute()
		{
			return $this->first_name . "-" . $this->last_name;
		}


		/**
		 * @param $name
		 */
		public function hasRole($name)
		{
		}

		public function can($ability, $arguments = [])
		{

		}

		/**
		 * Each User has a Bank Account
		 * @return \Illuminate\Database\Eloquent\Relations\HasOne
		 */
		public function bankDetails()
		{
		    return $this->hasOne(BankDetail::class,'user_id');
		}

		public function emergencyContacts()
		{
			return $this->hasMany(EmergencyContact::class);
		}

        public function photo()
        {
            return $this->hasOne(Photo::class,'id','avatar');
		}

	}

	//fixme fix CAN method with argument problem
	//todo create a birthday reminder