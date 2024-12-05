import java.util.Scanner;

public class Couronne {
    public static void main(String[] args) {
        Scanner scanner=new Scanner(System.in);
        double r_ext,r_int,x,y;
        System.out.print("Rayon exterieur\t");
        r_ext=scanner.nextDouble();
        System.out.println("\n");
        System.out.print("Rayon interieur\t");
        r_int=scanner.nextDouble();
        System.out.println("\n");
        System.out.print("Donnez un point \nx:\t");
        x=scanner.nextDouble();
        System.out.println("\n");
        System.out.print("y:\t");
        y=scanner.nextDouble();
	x=Math.abs(x);
	y=Math.abs(y);

        if (((x>=r_int && x<=r_ext)||(y>=r_int && y<=r_ext))) {
            System.out.println("Ce point est dans la couronne");
        }
        else{
            System.out.println("Ce point n'est pas dans la couronne");
        }
        scanner.close();
    }
}
