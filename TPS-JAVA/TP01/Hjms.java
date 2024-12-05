import java.util.Scanner;

public class Hjms {
    public static void main(String[] args) {
        Scanner scanner=new Scanner(System.in);
        int jour=0,heure=0,minute=0,seconde=0,second_D,seconde_E=0;
        System.out.println("Donnez la duree en seconde ");
        second_D=scanner.nextInt();
        while (second_D!=seconde) {
            seconde=seconde+1;
            seconde_E++;
            if (seconde_E>59) {
                seconde_E=0;
                minute=minute+1;
            }
            if (minute>59) {
                minute=0;
                heure=heure+1;
            }
            if (heure>23) {
                heure=0;
                jour=jour+1;
            }
            
        }

        System.out.println("Cette duree equivaut a "+jour+" Jours "+heure+" Heure "+minute+" minutes "+seconde_E+" secondes");
        scanner.close();
    }
}
