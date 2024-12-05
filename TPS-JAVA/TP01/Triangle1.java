import java.util.Scanner;

public class Triangle1 {

    public static void main(String[] args) {
        Scanner scanner=new Scanner(System.in);
        int nombre,cpt;
        System.out.print("Donnez la taille du motif :\t");
        nombre=scanner.nextInt();
        System.out.println("\n");

        for(int i=0;i<=nombre;i++){
            cpt=0;
            while (cpt<i) {
                System.out.print("*");
                cpt++;
            }
            System.out.print("\n");

        }
        scanner.close();
    }
}