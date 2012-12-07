/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package calculsimilarite;

import java.util.Scanner;
import java.util.TreeMap;

/**
 *
 * @author florian
 */
public class FormatDocument {

    public String html;

    public FormatDocument(String html) {
        this.html = html;
    }

    public void format(TreeMap<String, String> dico) {
        Scanner scanner = new Scanner(html);

        while (scanner.hasNext()) {
            System.out.println(scanner.next());
        }
    }
}
