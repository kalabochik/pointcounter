<?php
namespace app\forms;

use std, gui, framework, app;


class MainForm extends AbstractForm
{

    /**
     * @event button_plus_player1.click-Left 
     */
    function doButton_plus_player1ClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->points_player1->requestFocus();
		$this->points_player1->text += 1;
		waitAsync(500, function () use ($e, $event) {
			$e->sender->requestFocus();
		});

        
    }

    /**
     * @event button_minus_player1.click-Left 
     */
    function doButton_minus_player1ClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->points_player1->requestFocus();
		$this->points_player1->text += -1;
		waitAsync(500, function () use ($e, $event) {
			$e->sender->requestFocus();
		});

        
    }

    /**
     * @event button_minus_player2.click-Left 
     */
    function doButton_minus_player2ClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->points_player2->requestFocus();
		$this->points_player2->text += -1;
		waitAsync(500, function () use ($e, $event) {
			$e->sender->requestFocus();
		});

        
    }

    /**
     * @event button_minus_player3.click-Left 
     */
    function doButton_minus_player3ClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->points_player3->requestFocus();
		$this->points_player3->text += -1;
		waitAsync(500, function () use ($e, $event) {
			$e->sender->requestFocus();
		});

        
    }




    /**
     * @event button_plus_player2.click-Left 
     */
    function doButton_plus_player2ClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->points_player2->requestFocus();
		$this->points_player2->text += 1;
		waitAsync(500, function () use ($e, $event) {
			$e->sender->requestFocus();
		});

        
    }

    /**
     * @event button_plus_player3.click 
     */
    function doButton_plus_player3Click(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->points_player3->requestFocus();
		$this->points_player3->text += 1;
		waitAsync(500, function () use ($e, $event) {
			$e->sender->requestFocus();
		});

        
    }

    /**
     * @event button_biscuits_player2.click-Left 
     */
    function doButton_biscuits_player2ClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->progressBar_biscuits_player2->requestFocus();
		$this->progressBar_biscuits_player2->progress += 10;

        
    }

    /**
     * @event button_biscuits_player3.click-Left 
     */
    function doButton_biscuits_player3ClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->progressBar_biscuits_player3->requestFocus();
		$this->progressBar_biscuits_player3->progress += 10;

        
    }

    /**
     * @event changeNames.click-Left 
     */
    function doChangeNamesClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->namePlayer2->enabled = true;
		$this->namePlayer3->enabled = true;
		$this->namePlayer1->enabled = true;
		$e->sender->hide();
		$this->saveNames->show();

        
    }

    /**
     * @event saveNames.click-Left 
     */
    function doSaveNamesClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->changeNames->show();
		$e->sender->hide();
		$this->namePlayer2->enabled = false;
		$this->namePlayer3->enabled = false;
		$this->namePlayer1->enabled = false;

        
    }

    /**
     * @event button_biscuits_player1.click-Left 
     */
    function doButton_biscuits_player1ClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->progressBar_biscuits_player1->requestFocus();
		$this->progressBar_biscuits_player1->progress += 10;

        
    }

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->button_plus_player1->hide();
		$this->button_plus_player2->hide();
		$this->button_plus_player3->hide();
		$this->button_minus_player1->hide();
		$this->button_minus_player2->hide();
		$this->button_minus_player3->hide();
		$this->button_biscuits_player1->hide();
		$this->button_biscuits_player2->hide();
		$this->button_biscuits_player3->hide();
		$e->sender->hide();
		$this->changeNames->enabled = false;
		$this->saveNames->enabled = false;
		$this->points_player1->enabled = false;
		$this->points_player2->enabled = false;
		$this->points_player3->enabled = false;
		$this->namePlayer1->enabled = false;
		$this->namePlayer2->enabled = false;
		$this->namePlayer3->enabled = false;
		waitAsync(7000, function () use ($e, $event) {
			app()->shutdown();
		});

        
    }

}
