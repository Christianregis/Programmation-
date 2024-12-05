import java.util.Scanner;
public class racal {
static final double EPS=Math.pow(10, -5);
    public static void main(String[] args) {
        Scanner scanner=new Scanner(System.in); 
        double A,un;
        int i=0;
        System.out.println("Entrez un nombre entier A entre 1 et 100");
        A=scanner.nextDouble();
        if (A>=1 && A<=100) {
            double u0=(A/2);
	System.out.println("u0="+u0);
            while (Math.abs(Math.pow(u0, 2)-A)>=EPS) {
                un=((u0)+(A)/(u0))*(0.5);
                u0=un;
                System.out.println("U"+i+"="+u0);
                i++;

		
            }
            System.out.println("Valeur approchee de la racine carree ="+u0);
        }
        else{
            System.out.println("Vous n'avez pas entre un nombre dans l'intervalle");
        }
        scanner.close();
    }
}