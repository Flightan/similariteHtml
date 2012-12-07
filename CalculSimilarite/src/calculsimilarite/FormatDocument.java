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

    public FormatDocument() {
    }

    public String format(String html, TreeMap<String, String> dico) {
        Scanner scanner = new Scanner(html);
        StringBuilder formattedHtml = new StringBuilder();

        while (scanner.hasNext()) {
            String value = scanner.next();
            String replaceValue = dico.get(value);
            if (replaceValue != null) {
                formattedHtml.append(replaceValue);
            } else {
                formattedHtml.append(value);
            }

            formattedHtml.append(" ");
        }
        scanner.close();
        
        return formattedHtml.toString();
    }
}
