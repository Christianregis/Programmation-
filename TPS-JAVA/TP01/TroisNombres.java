import java.util.Scanner;

public class TroisNombres {
    public static void main(String[] args) {
        Scanner scanner =new Scanner(System.in);
        double x,y,z,temp=0;
        System.out.print("1 ere nombre :\t");
        x=scanner.nextDouble();
        System.out.println("\n");
        System.out.print("2 eme nombre:\t");
        y=scanner.nextDouble();
        System.out.println("\n");
        System.out.print("3 eme nombre:\t");
        z=scanner.nextDouble();
        System.out.println("\n");
        
        if (x>=y && x>=z) {
            temp=Math.max(y,z);
        }
        if (y>=x&&y>=z) {
            temp=Math.max(x,z);
        }
        if(z>=x&&z>=y){
            temp=Math.max(x,y);
        }


        System.out.println("Les nombres dans l'ordre croissant "+Math.min(Math.min(x, y), z)+" "+temp+" "+Math.max(Math.max(x,y),z));
        scanner.close();
    }
}
