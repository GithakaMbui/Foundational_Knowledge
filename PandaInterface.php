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
