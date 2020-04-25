<?php
/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * Reversi implementation : © Gregory Isabelli <gisabelli@boardgamearena.com>
 *
 * This code has been produced on the BGA studio platform for use on https://boardgamearena.com.
 * See http://en.doc.boardgamearena.com/Studio for more information.
 * -----
 * 
 * reversitutobygrivin.action.php
 *
 * ReversiTutoByGrivin main action entry point
 *
 *
 * In this file, you are describing all the methods that can be called from your
 * user interface logic (javascript).
 *       
 * If you define a method "myAction" here, then you can call it from your javascript code with:
 * this.ajaxcall( "/reversitutobygrivin/reversitutobygrivin/myAction.html", ...)
 *
 */
  
  
  class action_reversitutobygrivin extends APP_GameAction
  { 
    // Constructor: please do not modify
   	public function __default()
  	{
  	    if( self::isArg( 'notifwindow') )
  	    {
            $this->view = "common_notifwindow";
  	        $this->viewArgs['table'] = self::getArg( "table", AT_posint, true );
  	    }
  	    else
  	    {
            $this->view = "reversitutobygrivin_reversitutobygrivin";
            self::trace( "Complete reinitialization of board game" );
      }
  	} 
  	
  	// TODO: defines your action entry points there



    public function playDisc()
    {
        self::setAjaxMode();     
        $x = self::getArg( "x", AT_posint, true );
        $y = self::getArg( "y", AT_posint, true );
        $result = $this->game->playDisc( $x, $y );
        self::ajaxResponse( );
    }

  }
  

