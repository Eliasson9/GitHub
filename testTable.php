<?php

namespace Gin;

use Tonic\Resource;
use Tonic\Response;

/**
 *	@uri /testTable/([a-z]+)
*/
class testTable extends Resource {
  /**
   * @method GET
   * @throws \Tonic\Exception
   * @return \Tonic\Response
   */

  public function getId($id)  {
     return new Response(Response::OK, json_encode(array('message'=>$id)));
  }

   /**
   * @method POST
   * @throws \Tonic\Exception
   * @return \Tonic\Response
   */
  public function setId()  {
  	$db = $this->request->data);
  	
  	return new Response(Response::CREATED, ($db);
  }
}


/**
 *	@uri /testTable/([a-z]+)/([a-z]+)
*/
class testTable2 extends Resource {
  /**
   * @method GET
   * @throws \Tonic\Exception
   * @return \Tonic\Response
   */
  public function getId($id, $t1)  {
     return new Response(Response::OK, json_encode(array('message'=>$t1)));
  }
}





