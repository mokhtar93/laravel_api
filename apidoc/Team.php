<?php

/**
 * @api {GET} /api/teams List all teams
 * @apiName ListTeams
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 
 * { 
 *  [
 *   {
 *       "id": 6,
 *       "title": "back_End",
 *       "created_at": "2018-08-24 18:10:00",
 *       "updated_at": "2018-08-24 18:10:00"
 *   },
 *   {
 *       "id": 7,
 *       "title": "hr",
 *       "created_at": "2018-08-24 18:10:03",
 *       "updated_at": "2018-08-24 18:10:03"
 *   }
 *  ]
 * }
 */

 /**
 * @api {GET}/api/teams/:id Show team
 * @apiName ListSingleTeam
 * @apiParam {Number} id  Team Id
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 * {
 *     "id": 7,
 *     "title": "hr",
 *     "created_at": "2018-08-24 18:10:03",
 *     "updated_at": "2018-08-24 18:10:03"
 * }
 *  @apiErrorExample Error-Response:
 *     HTTP/1.1 404 Not Found
 *    {
 *      "No Team found with this Id"
 *    }
 */

 /**
 * @api {POST} /api/users Create a new Team
 * @apiName CreateTeam
 * @apiParamExample {json} Request-Example:
 *   {
 *	   "title": "back_end"
 *   }
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 201 Created
 * {     
 *    "title": "back_end",
 *    "updated_at": "2018-08-24 19:26:27",
 *    "created_at": "2018-08-24 19:26:27",
 *    "id": 8
 *  }
 */

 /**
 * @api {PUT} /api/teams/:id Update Team
 * @apiName UpdateTeam
 * @apiParam {Number} id  Team Id
 * @apiParamExample {json} Request-Example:
 *   {
 *     "title": "front_end"
 *  }
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 ok
 * {
 *     "id": 8,
 *     "title": "front_end",
 *     "created_at": "2018-08-24 19:26:27",
 *     "updated_at": "2018-08-24 19:27:42"
 * }
 *  @apiErrorExample Error-Response:
 *     HTTP/1.1 404 Not Found
 *    {
 *    "No user Team with this Id"
 *    }
 */

  /**
 * @api {DELETE} /api/teams/:id Delete Team
 * @apiName DeleteTeam
 * @apiParam {Number} id  Team Id
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 ok
 * {
 *      "deleted"
 *  }
 *  @apiErrorExample Error-Response:
 *     HTTP/1.1 404 Not Found
 *    {
 *    "No Team found with this Id"
 *    }
 */
  /**
 * @api {GET} /api/teams/list_teams/:id
 * @apiName ListUserTeams
 * @apiParam {Number} id  User Id
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 ok
 *   {
 *    [
 *     {
 *     "id": 6,
 *     "title": "back_End",
 *     "created_at": "2018-08-24 18:10:00",
 *     "updated_at": "2018-08-24 18:10:00",
 *     "pivot": {
 *         "user_id": 13,
 *         "team_id": 6
 *     }
 *   },
 * {
 *     "id": 7,
 *     "title": "hr",
 *     "created_at": "2018-08-24 18:10:03",
 *     "updated_at": "2018-08-24 18:10:03",
 *     "pivot": {
 *         "user_id": 13,
 *         "team_id": 7
 *     }
 *   }
 *  ]
 * }
 *  @apiErrorExample Error-Response:
 *     HTTP/1.1 404 Not Found
 *    {
 *      "No User found with this Id"
 *    }
 */
