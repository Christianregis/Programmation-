import java.util.Scanner;

public class Fibo2 {
    public static void main(String[] args) {
        Scanner scanner=new Scanner(System.in);
        double nombre,u0=0,u1=1,cpt=0,un=0;
        System.out.println("Entrez le nombre de reccurence !");
        nombre=scanner.nextDouble();
        while (u0<=nombre) {
            un=u1+u0;
            u0=u1;
            u1=un;
            cpt++;
        }
        System.out.println("La valeur du premier terme correspondant est "+u0+" et son rang est "+cpt);
        scanner.close();
    }
}
