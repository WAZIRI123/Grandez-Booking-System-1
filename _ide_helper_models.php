<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Activity
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $description
 * @property string|null $slug
 * @property string $explanation
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Reservation[] $reservations
 * @property-read int|null $reservations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Activity filter(array $filters)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity query()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereExplanation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereUpdatedAt($value)
 */
	class Activity extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CarRental
 *
 * @property int $id
 * @property string $name
 * @property int $price
 * @property string $image
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CarReservation[] $carReservations
 * @property-read int|null $car_reservations_count
 * @method static \Illuminate\Database\Eloquent\Builder|CarRental newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarRental newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarRental query()
 * @method static \Illuminate\Database\Eloquent\Builder|CarRental whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarRental whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarRental whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarRental whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarRental wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarRental whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarRental whereUpdatedAt($value)
 */
	class CarRental extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CarReservation
 *
 * @property int $id
 * @property int $total_price
 * @property int $car_id
 * @property int $user_id
 * @property string $code
 * @property \Carbon\CarbonImmutable $start_date
 * @property \Carbon\CarbonImmutable $end_date
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CarRental|null $cars
 * @property-read \App\Models\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|CarReservation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarReservation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarReservation query()
 * @method static \Illuminate\Database\Eloquent\Builder|CarReservation whereCarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarReservation whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarReservation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarReservation whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarReservation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarReservation whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarReservation whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarReservation whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarReservation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarReservation whereUserId($value)
 */
	class CarReservation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Package
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $day1
 * @property string $day2
 * @property string $day3
 * @property string $day4
 * @property string $day5
 * @property string $day6
 * @property string $day7
 * @property string $day8
 * @property string|null $slug
 * @property string $total_days
 * @property int $package_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PackageReservation[] $Packagereservations
 * @property-read int|null $packagereservations_count
 * @property-read \App\Models\PackageType|null $packageTypes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Reservation[] $reservations
 * @property-read int|null $reservations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Package filter(array $filters)
 * @method static \Illuminate\Database\Eloquent\Builder|Package newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Package newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Package query()
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereDay1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereDay2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereDay3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereDay4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereDay5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereDay6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereDay7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereDay8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package wherePackageTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereTotalDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereUpdatedAt($value)
 */
	class Package extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PackageActivities
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PackageActivities newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageActivities newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageActivities query()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageActivities whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageActivities whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageActivities whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageActivities whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageActivities whereUpdatedAt($value)
 */
	class PackageActivities extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PackageReservation
 *
 * @property int $id
 * @property int $package_id
 * @property int $user_id
 * @property string $code
 * @property string $start_date
 * @property string $end_date
 * @property int $no_of_visitors
 * @property string $total_price
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Package|null $packages
 * @property-read \App\Models\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservation query()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservation whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservation whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservation whereNoOfVisitors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservation wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservation whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservation whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservation whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservation whereUserId($value)
 */
	class PackageReservation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PackageReservationDetails
 *
 * @property int $id
 * @property int $activity_id
 * @property int $reservation_id
 * @property int $day
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservationDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservationDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservationDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservationDetails whereActivityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservationDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservationDetails whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservationDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservationDetails whereReservationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageReservationDetails whereUpdatedAt($value)
 */
	class PackageReservationDetails extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PackageType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Package[] $packages
 * @property-read int|null $packages_count
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType query()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType whereUpdatedAt($value)
 */
	class PackageType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Reservation
 *
 * @property int $id
 * @property string $code
 * @property int $user_id
 * @property int $activity_id
 * @property string $date
 * @property string $check_in
 * @property int $no_of_visitors
 * @property string $price
 * @property string $total_price
 * @property \App\Enums\ReservationStatus $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Activity|null $activities
 * @property-read \App\Models\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereActivityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereCheckIn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereNoOfVisitors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereUserId($value)
 */
	class Reservation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Transfer
 *
 * @property int $id
 * @property string $name
 * @property int $price
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\transferReservation[] $carReservations
 * @property-read int|null $car_reservations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereUpdatedAt($value)
 */
	class Transfer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $phone
 * @property string $password
 * @property string $avatar
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CarReservation[] $carreservations
 * @property-read int|null $carreservations_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PackageReservation[] $packagereservations
 * @property-read int|null $packagereservations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Reservation[] $reservations
 * @property-read int|null $reservations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\transferReservation[] $transferreservations
 * @property-read int|null $transferreservations_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\transferReservation
 *
 * @property int $id
 * @property int $transfer_id
 * @property int $user_id
 * @property string $code
 * @property \Carbon\CarbonImmutable $date
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Transfer|null $transfers
 * @property-read \App\Models\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|transferReservation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|transferReservation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|transferReservation query()
 * @method static \Illuminate\Database\Eloquent\Builder|transferReservation whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|transferReservation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|transferReservation whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|transferReservation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|transferReservation whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|transferReservation whereTransferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|transferReservation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|transferReservation whereUserId($value)
 */
	class transferReservation extends \Eloquent {}
}

