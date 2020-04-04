<!DOCTYPE html>
<html>
	<body>
		<?php
			$n=1;
            $n1=0; $n2=0; $n3=0; $n4=0;
			while($n<=50){
			echo "<br>";
                echo "Round no:$n<br>";
                
                $p1=rand(1,3);
                echo "Player 1:".choices($p1)."<br>";
                
                $p2=rand(1,3);
                echo "Player 2:".choices($p2)."<br>";
				
                
                $p3=rand(1,3);
                echo "Player 3:".choices($p3)."<br>";
                
                
                $p4=rand(1,3);
                echo "Player 4:".choices($p4)."<br>";
                
                $a1=RPS($p1,$p2);
                if($a1==0){echo "Players 1 and 2 tie<br>";}
                elseif($a1==1){echo "Player 1 beats Player 2<br>";$n1++;}
                else{echo "Player 1 loses to Player 2<br>";$n2++;}
                
                $a2=RPS($p1,$p3);
                if($a2==0){echo "Players 1 and 3 tie<br>";}
                elseif($a2==1){echo "Player 1 beats Player 3<br>";$n1++;}
                else{echo "Player 1 loses to Player 3<br>";$n3++;}
                
                $a3=RPS($p2,$p3);
                if($a3==0){echo "Players 2 and 3 tie<br>";}
                elseif($a3==1){echo "Player 2 beats Player 3<br>";$n2++;}
                else{echo "Player 2 loses to Player 3<br>";$n3++;}
                
                $a4=RPS($p1,$p4);
                if($a4==0){echo "Players 1 and 4 tie<br>";}
                elseif($a4==1){echo "Player 1 beats Player 4<br>";$n1++;}
                else{echo "Player 1 loses to Player 4<br>";$n4++;}
                
                $a5=RPS($p2,$p4);
                if($a5==0){echo "Players 2 and 4 tie<br>";}
                elseif($a5==1){echo "Player 2 beats Player 4<br>";$n2++;}
                else{echo "Player 2 loses to Player 4<br>";$n4++;}
                
                $a6=RPS($p3,$p4);
                if($a6==0){echo "Players 3 and 4 tie<br>";}
                elseif($a6==1){echo "Player 3 beats Player 4<br>";$n3++;}
                else{echo "Player 3 loses to Player 4<br>";$n4++;}
                
				$n++;
			}
         
            function choices($p1){
            	if($p1==1){
                	return "Rock";
                }
                elseif($p1==2){
                	return "Paper";
                }
                else{return "Scissors";}
            }
			
            function RPS($p1,$p2){
                if($p1==$p2){
                	return 0;
                }
                elseif($p1<$p2 &&  $p2-$p1!=2){
					return 2;
                }
                else{return 1;}
            }
            echo "<br>";
            echo "Final Scores of all players:<br>";
            echo "Player 1: $n1<br>";
            echo "Player 2: $n2<br>";
            echo "Player 3: $n3<br>";
            echo "Player 4: $n4<br>";
		?>
	</body>
</html>