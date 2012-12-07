package calculsimilarite;

import java.util.Enumeration;
import javax.swing.text.*;
import javax.swing.text.html.*;
import javax.swing.text.html.HTML.Attribute;

public class TagParser extends HTMLEditorKit.ParserCallback {

    private int tabLevel = 1;

    public StringBuilder resHtml = new StringBuilder();

    @Override
    public void handleComment(char[] data, int pos) {
        //displayData(new String(data));
    }

    @Override
    public void handleEndOfLineString(String eol) {
        // System.out.println( line++ );
    }

    @Override
    public void handleEndTag(HTML.Tag tag, int pos) {
        tabLevel--;
        // displayData("/" + tag);
    }

    @Override
    public void handleError(String errorMsg, int pos) {
        // On s'en fiche
        // displayData(pos + ":" + errorMsg);
    }

    public void handleMutableTag(HTML.Tag tag, MutableAttributeSet a, int pos) {
        // displayData("mutable:" + tag + ": " + pos + ": " + a);
        Enumeration e = a.getAttributeNames();
        while (e.hasMoreElements()) {
            Object name = e.nextElement();
            if (name == Attribute.HREF) {
                Object value = a.getAttribute(name);
                resHtml.append(value);
            }
        }
    }

    @Override
    public void handleSimpleTag(HTML.Tag tag, MutableAttributeSet a, int pos) {
        Enumeration e = a.getAttributeNames();
        while (e.hasMoreElements()) {
            Object name = e.nextElement();
            if (name == Attribute.HREF) {
                Object value = a.getAttribute(name);
                resHtml.append(value);
            }
        }
    }

    @Override
    public void handleStartTag(HTML.Tag tag, MutableAttributeSet a, int pos) {
        Enumeration e = a.getAttributeNames();
        while (e.hasMoreElements()) {
            Object name = e.nextElement();
            if (name == Attribute.HREF) {
                Object value = a.getAttribute(name);
                resHtml.append(value);
            }
        }
        tabLevel++;
    }

    @Override
    public void handleText(char[] data, int pos) {
        displayData(new String(data));
    }

    private void displayData(String text) {
        /* Debug
        for (int i = 0; i < tabLevel; i++) {
            System.out.print("\t");
        }

        System.out.println(text);
        */
        String[] result = text.split("\\s*[,;:.?!\"\']+\\s*");
        for (String word : result) {
             resHtml.append(word.toLowerCase()).append(" ");
        }
    }
}