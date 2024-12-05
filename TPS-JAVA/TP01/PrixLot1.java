import java.util.Random;
import java.util.Scanner;

public class PrixLot1 {

    public static void main(String[] args) {
        Scanner scanner=new Scanner(System.in);
        Random random=new Random();
        int nombre,cpt=0;
        int val_aleatoire;
        System.out.print("Entrez un nombre entier entre 1 et 1000 ! \t");
        nombre=scanner.nextInt();
        val_aleatoire=random.nextInt(1000)+1;
        while (nombre!=val_aleatoire) {
            if (nombre<val_aleatoire) {
                System.out.println("Trop petit !");
                nombre=scanner.nextInt();
                cpt++;
            }
            else if (nombre>val_aleatoire) {
                System.out.println("Trop grand !");
                nombre=scanner.nextInt();
                cpt++;
            }
            
        }
        if (nombre==val_aleatoire) {
            System.out.println("Bravo vous avez trouve le nombre "+val_aleatoire+" en "+cpt+" coup !");
        }
        scanner.close();
    }
}