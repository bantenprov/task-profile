# Task Profile
User Profile for Task Management

## Edit 
tambahkan script dibawah pada file `app/User.php` / model `User`
```php
    public function getComment()
    {
        return $this->hasMany(\Bantenprov\Comment\Models\Comment::class);
    }

    public function getRating()
    {
        return $this->hasMany(\Bantenprov\Comment\Models\CommentRating::class);
    }

    public function getTask()
    {
        return $this->hasMany(\Bantenprov\Task\Models\Task::class);
    }

    public function getMember()
    {
        return $this->hasOne(\Bantenprov\Member\Models\Member::class);
    }

    public function getStaf()
    {
        return $this->hasOne(\Bantenprov\Staf\Models\Staf::class);
    }

    public function getMyRole()
    {
        return $this->belongsTo('App\Role','user_id');
    }
```
