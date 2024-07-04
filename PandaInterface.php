<?php
interface PandaInterface  {
     /** 6 * Eat some food! 7 */
    public function eat();
    /** 11 * Poop! (Normally after eating.) */
    public function poop();
    /** 16 *
 * Sleepy time! 17 */
    public function sleep();
     }

    //..Red panda
class RedPanda implements PandaInterface
{
    /** 6 * Eat some food! 7 */
 public function eat()
 {
     echo "The red panda eats some fruit.\n";
 }  /** 14 * Poop! (Normally after eating.) 15 */
 public function poop()
 {
     echo "The red panda takes a poop.\n";
      }
       /** 22 * Sleepy time! 23 */
    public function sleep()
    {  echo "The red panda sleeps up a tree.\n";
    }
}

//second class to represent a GiantPanda
class GiantPanda implements PandaInterface
{
    /**  * Eat some food!
     *  */
    public function eat()
    {
        echo "The giant panda eats some bamboo.\n";
    }

    /** 14 * Poop! (Normally after eating.)  */
    public function poop()
    {
        echo "The giant panda takes a giant poop.\n";
    }

    /**  * Sleepy time!
     * */
    public function sleep()
    {
        echo "The giant panda sleeps on the ground.\n";
    }
}

// create a new class.We’regoing to call it th eZooKeeper
// This class doesn’t extend any other classes,and doesn’t implement any interfaces.

class ZooKeeper  {
     /**  * Care for a panda.
      *  *  * @param PandaInterface $panda
      * * @return void
      * */
    public function care(PandaInterface $panda)
    {
         // Perform panda stuff.
 $panda->eat();
 echo "<br/>";
  $panda->poop();
        echo "<br/>";
   $panda->sleep();
        echo "<br/>";
    }
}

// Create panda instances.
 $redPanda = new RedPanda;
$giantPanda = new GiantPanda;
// Create the zookeeper.
 $keeper = new ZooKeeper;
 // Care for both pandas.
 $keeper->care($redPanda);
 $keeper->care($giantPanda);

