import java.util.Scanner;

public class Triangle2 {

    public static void main(String[] args) {
        Scanner scanner=new Scanner(System.in);
        int nombre,cpt,i=0;
        System.out.print("Donnez la taille du motif :\t");
        nombre=scanner.nextInt();
        System.out.println("\n");

        while (i<nombre) {
            cpt=0;
            while (cpt<=i) {
                System.out.print("*");
                cpt++;
            }
            System.out.print("\n");
            i++;
        }
        scanner.close();
    }
}