import java.util.Random;
import java.util.Scanner;

public class PrixLot3 {

    public static void main(String[] args) {
        
        Scanner scanner = new Scanner(System.in);
        Random random = new Random();
        boolean res = true;
        int nombre_partie=0;
        int somme_nombres=0;
        while (res && nombre_partie<=20) {
            int nombre, cpt = 0, essai;
            int val_aleatoire = random.nextInt(1000) + 1;

            essai = 20;

            System.out.println("Essayez de deviner le nombre entre 1 et 1000 !");

            boolean trouve = false;
            while (cpt < essai) {
                System.out.print("Entrez un nombre : ");
                nombre=random.nextInt(1000)+1;
                cpt++;

                if (nombre < val_aleatoire) {
                    System.out.println("Trop petit !");
                    somme_nombres=somme_nombres+nombre;
                } else if (nombre > val_aleatoire) {
                    System.out.println("Trop grand !");
                    somme_nombres=somme_nombres+nombre;
                } else {
                    System.out.println("Bravo ! Vous avez trouvé le nombre " + val_aleatoire + " en " + cpt + " coups !");
                    trouve = true;
                    break;
                }
            }

            if (!trouve) {
                System.out.println("Dommage, le nombre était " + val_aleatoire);
            }


            System.out.println("Voulez-vous continuer ? y/n");
            String resp = scanner.nextLine();

            if (resp.equals("y")) {
                res = true;
                nombre_partie++;

            } else {
                res = false;
                break;
            }
        }
        System.out.println("La moyenne des differents essaie est de "+((somme_nombres)/20));

        scanner.close();
    }
}
    