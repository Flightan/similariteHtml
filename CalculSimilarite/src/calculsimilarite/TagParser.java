package calculsimilarite;

import javax.swing.text.*;
import javax.swing.text.html.*;

public class TagParser extends HTMLEditorKit.ParserCallback
{
    private int tabLevel = 1;
    private int line = 1;

    @Override
    public void handleComment(char[] data, int pos)
    {
    	displayData(new String(data));
    }

    @Override
    public void handleEndOfLineString(String eol)
    {
    	System.out.println( line++ );
    }

    @Override
    public void handleEndTag(HTML.Tag tag, int pos)
    {
    	tabLevel--;
    	displayData("/" + tag);
    }

    @Override
    public void handleError(String errorMsg, int pos)
    {
    	displayData(pos + ":" + errorMsg);
    }

    public void handleMutableTag(HTML.Tag tag, MutableAttributeSet a, int pos)
    {
    	displayData("mutable:" + tag + ": " + pos + ": " + a);
    }

    @Override
    public void handleSimpleTag(HTML.Tag tag, MutableAttributeSet a, int pos)
    {
    	displayData( tag + "::" + a );
    }

    @Override
    public void handleStartTag(HTML.Tag tag, MutableAttributeSet a, int pos)
    {
    	displayData( tag + ":" + a );
    	tabLevel++;
    }

    @Override
    public void handleText(char[] data, int pos)
    {
    	displayData( new String(data) );
    }

    private void displayData(String text)
    {
    	for (int i = 0; i < tabLevel; i++) {
            System.out.print("\t");
        }

    	System.out.println(text);
    }
}