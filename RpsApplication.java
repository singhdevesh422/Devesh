import java.util.*;
public class RpsApplication {
	public static int randomNumberAssign() {
		int min=1;
		int max=3;
		int rand= min + (int)(Math.random() * ((max - min) + 1));	
		return rand;
	}
	
	public static String choices(int p) {
		if(p==1){
        	return "Rock";
        }
        else if(p==2){
        	return "Paper";
        }
        else{
        	return "Scissors";
        }
	}
	
	public static void result(int p1,int p2,int p3, int p4) {
		int[] choices=new int[]{p1,p2,p3,p4};
		int[][] arr = new int[4][4]; 
		
		//loop to create result matrix
		for(int i=0;i<4;i++){  
			for(int j=0;j<4;j++){  
				if(i==j) {
					arr[i][j]=0;
				}
				else if((choices[i]-choices[j])==-2 || (choices[i]-choices[j])==1) {
					arr[i][j]=1;    
				}
				else {
					arr[i][j]=0;
				}
				System.out.print(arr[i][j]+" ");  //printing matrix element
			}
			System.out.println();//new line  
			}  
	}
	
	
	public static void main(String[] args) {
		
		int n=0;
		while(n<=50) {
			System.out.println("Iteration no: "+n);
			int p1=randomNumberAssign();
			int p2=randomNumberAssign();
			int p3=randomNumberAssign();
			int p4=randomNumberAssign();
			System.out.println("Player 1: "+choices(p1));
			System.out.println("Player 2: "+choices(p2));
			System.out.println("Player 3: "+choices(p3));
			System.out.println("Player 4: "+choices(p4));
			result(p1,p2,p3,p4);
			n++;
		}
		
		
	}

}
