import java.util.Random;
import java.util.Scanner;

public class PrixLot2 {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        Random random = new Random();
        boolean res = true;

        while (res) {
            int nombre, cpt = 0, essai;
            int val_aleatoire = random.nextInt(1000) + 1;

            System.out.println("Entrez le nombre d'essais pour le jeu :");
            essai = scanner.nextInt();

            System.out.println("Essayez de deviner le nombre entre 1 et 1000 !");

            boolean trouve = false;
            while (cpt < essai) {
                System.out.print("Entrez un nombre : ");
                nombre = scanner.nextInt();
                cpt++;

                if (nombre < val_aleatoire) {
                    System.out.println("Trop petit !");
                } else if (nombre > val_aleatoire) {
                    System.out.println("Trop grand !");
                } else {
                    System.out.println("Bravo ! Vous avez trouvé le nombre " + val_aleatoire + " en " + cpt + " coups !");
                    trouve = true;
                    break;
                }
            }

            if (!trouve) {
                System.out.println("Dommage, le nombre était " + val_aleatoire);
            }


            scanner.nextLine(); 
            System.out.println("Voulez-vous continuer ? y/n");
            String resp = scanner.nextLine();

            if (resp.equals("y")) {
                res = true;
            } else {
                res = false;
            }
        }

        scanner.close();
    }
}