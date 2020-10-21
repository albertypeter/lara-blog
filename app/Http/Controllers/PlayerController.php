<?php


namespace App\Http\Controllers;

use App\Models\Player;
class PlayerController extends Controller
{

    public function showAction($id)
    {
        $player = Player::find($id);
        echo $player->meno."<br>";
        echo $player->priezvisko."<br>";
        echo $player->klub."<br>";
        echo $player->vek."<br>";
        echo $player->updated_at;
    }

    public function insertAction()
    {
        $player = new Player();
        $player->meno = uniqid(10);
        $player->priezvisko = uniqid(10);
        $player->klub = uniqid(20);
        $player->cislo = mt_rand(1,99);
        $player->save();
    }

    public function updateAction($id)
    {
        $player = Player::where("id","=", $id)->first();
        $player->update(["vek" => mt_rand(1,99)]);
    }

    public function deleteAction($id)
    {
        $player = Player::fing($id);
        $player->delete();
    }


    public function showAllAction()
    {
        $players = Player::all();
        foreach ($players as $player) {
            echo $player->meno . " ". $player->priezvisko. " ".$player->updated_at."<br>";
        }
    }
}
