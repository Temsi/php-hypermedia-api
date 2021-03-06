<?php
namespace LeadFerret\Lib\API\Representatives;

use Illuminate\Database\Eloquent\Model;
/**
 * Providing some basic CRUD level stuff 
 * 
 * @author solvire <stevenjscott@gmail.com>
 * @package RepresentationControllers
 * @namespace LeadFerret\Lib\API\Representatives
 */
class LaravelRepresentationController extends GenericRepresentationController
{
    
    protected $model = null;
    
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    
    /**
     * 
     * HTTP/1.1 200 OK
{
  "href" : "https://api.mycompany.com/v1/users?offset=50&amp;limit=50"
  "offset": 50,
  "limit": 50,
  “first”: {
      “href”: "https://api.mycompany.com/v1/users"
  },
   “prev”: {
      “href”: "https://api.mycompany.com/v1/users"
  },
  “next”: {
      “href”: "https://api.mycompany.com/v1/users?offset=100&amp;limit=50"
  },
  “last”: {
      “href”: "https://api.mycompany.com/v1/users?offset=50&amp;limit=50"
  },
  "items": [
    {
      ... user 51 name/value pairs ...
    },
    ...,
    {
      ... user 100 name/value pairs ...
    }
  }
}
     * 
     */
    public function getGenericContext()
    {
        
        // lets put together the data for render
        
    }
}
