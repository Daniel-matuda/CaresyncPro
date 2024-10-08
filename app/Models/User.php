<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'firstName',
    //     'lastName',
    //     'email',
    //     'password',
    // ];

    public $timestamps = false;

    protected $guarded = [
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getFullNameAttribute(){
        return $this->firstName . ' ' . $this->lastName;
    }

    public function insert(array $data)
    {
        // $this->firstName = $data['firstName'];
        // $this->lastName = $data['lastName'];
        // $this->email = $data['email'];
        // $this->password = bcrypt($data['password']);

        // return $this->save();

        $data['password'] = bcrypt($data['password']);
        return $this->create($data);
    }
}
