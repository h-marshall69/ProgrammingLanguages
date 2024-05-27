import java.util.HashSet;
import java.util.Scanner;

public class Main {
    private static class PentavocalicDetector {
        private HashSet<Character> vowels;

        public PentavocalicDetector() {
            vowels = new HashSet<>();
            vowels.add('a');
            vowels.add('e');
            vowels.add('i');
            vowels.add('o');
            vowels.add('u');
        }

        public boolean isPentavocalic(String word) {
            HashSet<Character> wordSet = new HashSet<>();
            for (char c : word.toLowerCase().toCharArray()) {
                if (vowels.contains(c)) {
                    wordSet.add(c);
                }
            }
            return wordSet.size() >= 5;
        }
    }

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Ingrese una palabra:");
        String word = scanner.nextLine();
        PentavocalicDetector detector = new PentavocalicDetector();
        if (detector.isPentavocalic(word)) {
            System.out.println("La palabra '" + word + "' es pentavocálica.");
        } else {
            System.out.println("La palabra '" + word + "' no es pentavocálica.");
        }
        scanner.close();
    }
}
