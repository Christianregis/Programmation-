import java.util.Scanner;

public class Premier {
    public static void main(String[] args) {
        Scanner scanner=new Scanner(System.in);
        int nombre,cpt,d;
        String c="y";
    while (c.equals("y")) {
        System.out.print("Entrez un nombre entier\t");
        nombre=scanner.nextInt();
        System.out.println("\n");
        cpt=0;
        d=1;
        if (nombre<=2) {
            System.out.println("Le nombre "+nombre+" n'est pas premier");
        }
        else{
        while (d<=nombre) {
            if (nombre%d==0) {
                cpt++;
            }
            d++;
        }
        if (cpt==2) {
            System.out.println("Le nombre "+nombre+" est premier");
            System.out.println(c);
        }
        else{
            System.out.println("Le nombre "+nombre+" n'est pas premier");
        }
        
        
    }
    scanner.nextLine();
    System.out.println("Voulez vous continuer ?\t");
    c=scanner.nextLine();
}
    scanner.close();
    }
}
