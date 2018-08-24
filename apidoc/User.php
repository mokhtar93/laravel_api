<?php

/**
 * @api {GET} /api/users List all users
 * @apiName ListUsers
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 
 *   {
 *      [
 *    {
 *        "id": 12,
 *        "name": "mohamed",
 *        "email": "mohamed@mail.com",
 *        "created_at": 2018-08-24 18:10:00,
 *        "updated_at": 2018-08-24 18:10:00
 *    },
 *    {
 *        "id": 13,
 *        "name": "asala",
 *        "email": "anakolmada@gmail.com",
 *        "created_at": 2018-08-24 18:10:00,
 *        "updated_at": nu2018-08-24 18:10:00ll
 *    }
 *   ]
 * }
 */

 /**
 * @api {GET}/api/users/:id Show user
 * @apiName ListSingleUser
 * @apiParam {Number} id  User Id
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *   {
 *    "id": 12,
 *    "name": "mohamed",
 *    "email": "mohamed@mail.com",
 *    "created_at": 2018-08-24 18:10:00,,
 *    "updated_at": 2018-08-24 18:10:00,
 *  }
 *  @apiErrorExample Error-Response:
 *     HTTP/1.1 404 Not Found
 *    {
 *    "No user found with this Id"
 *    }
 */

 /**
 * @api {POST} /api/users Create a new User
 * @apiName CreateUser
 * @apiParamExample {json} Request-Example:
 *   {
 *	  "name": "ahmed",
 *	  "email":"ahmed@gmail.com"
 *    }
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 201 Created
 * {
 *       "name": "ahmed",
 *       "email": "ahmed@gmail.com",
 *       "updated_at": "2018-08-24 18:43:05",
 *       "created_at": "2018-08-24 18:43:05",
 *       "id": 21
 *   }
 */

 /**
 * @api {PUT} /api/users/:id Update User
 * @apiParam {Number} id  User Id
 * @apiName UpdateUser
 * @apiParamExample {json} Request-Example:
 *   {
 *     	"name": "mark",
 *  	"email":"mark@gmail.com"
 *  }
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 ok
 * {
 *    "id": 21,
 *    "name": "mark",
 *    "email": "mark@gmail.com",
 *    "created_at": "2018-08-24 18:43:05",
 *    "updated_at": "2018-08-24 18:57:16"
 *  }
 *  @apiErrorExample Error-Response:
 *     HTTP/1.1 404 Not Found
 *    {
 *    "No user found with this Id"
 *    }
 */

  /**
 * @api {DELETE} /api/users/:id Delete User
 * @apiName DeleteUser
 * @apiParam {Number} id  User Id
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 ok
 * {
 *      "deleted"
 *  }
 *  @apiErrorExample Error-Response:
 *     HTTP/1.1 404 Not Found
 *    {
 *    "No user found with this Id"
 *    }
 */
  /**
 * @api {POST} /api/users/assign_user/:id
 * @apiName AssignUser
 * @apiParam {Number} id  User Id
 * @apiParamExample {json} Request-Example:
 *   {
 *   	"ids" : [5,6] // teams ids
 *  }
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 ok
 * {
 *      "assigned successfuly"
 *  }
 *  @apiErrorExample Error-Response:
 *     HTTP/1.1 404 Not Found
 *    {
 *      "please check user id and team ids"
 *    }
 */
