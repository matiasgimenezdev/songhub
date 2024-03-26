<?php

namespace Songhub\app\models;

use Songhub\core\exceptions\InvalidValueException;

class User
{
    public $fields = [
      "COMMENT_ID" => null,
      "LIKES" => null,
      "DATETIME" => null,
      "TEXT" => null,
      "POST_ID" => null,
      "USER_ID" => null,
    ];

    public function setCommentId($comment_id)
    {
        $this->fields["COMMENT_ID"] = $comment_id;
    }
    
    public function setLikes(int $likes = 0)
    {
        $this->fields["LIKES"] = $likes;
      }
      
      public function setDate(Date $date)
      {
        if (!(date_create($date))) {
          throw new InvalidValueException('Formato de fecha incompatible');
        }
        
        list($year, $month, $day) = explode('-', $date);
        if (!checkdate($month, $day, $year)) {
          throw new InvalidValueException('Formato de fecha incompatible');
        }
        
        $currentDate = new DateTime();
        if ($date < $currentDate->format('Y-m-d')) {
          throw new InvalidValueException('Formato de fecha incompatible');
        }
        
        $this->fields["DATE"] = $date;
      }
      
      public function setText(string $text)
      {
        $this->fields["TEXT"] = $text;
      }
      
      public function setPostId($post_id)
      {
          $this->fields["POST_ID"] = $post_id;
      }

      public function setUserId($user_id)
      {
        $this->fields["USER_ID"] = $user_id;
      }
      
      public function set(array $values)
      {
        
        foreach (array_keys($this->fields) as $field) {
          $field = trim($field);
          if (!isset($values[$field])) {
            continue;
          }
          
            $property = explode("_", $field);
            if (count($property) > 1) {
                $method = "set" . ucfirst(strtolower($property[0])) . ucfirst(strtolower($property[1]));

            } else {
                $method = "set" . ucfirst(strtolower($property[0]));
            }

            $this->$method($values[$field]);
        }

    }

}