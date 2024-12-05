import java.util.Scanner;

public class Parfait {
    public static void main(String[] args) {
        Scanner scanner=new Scanner(System.in);
        int n,d,cpt=0,i=1,cpt1=1;
        System.out.println("Entrez la valeur de reccurence");
        n=scanner.nextInt();
        System.out.println();
        while (cpt1<=n) {
            d=1;
            while (d<i) {
                if (i%d==0) {
                    cpt=cpt+d;
                }
                d++;
            }
            if (cpt==i) {
                System.out.println(i);
                cpt1++;
                cpt=0;
            }
            cpt=0;
            i++;
        }
        scanner.close();
    }
}
