/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package my.xmlcreate;

import java.util.*;
import javax.xml.transform.*;
import javax.xml.transform.stream.*;
import javax.xml.transform.dom.*;
import org.w3c.dom.*;
import javax.xml.parsers.*;

import javax.swing.text.Element;

/**
 *
 * @author nick
 */
public class date {
    public String name;
    public String icon;
    public String advisor;
    public String president;
    public String officers;
    public String members;
    public String description;
    
    
    public date(){
        name = "";
        icon = "";
        advisor = "";
        president = "";
        officers = "";
        members = "";
        description = "";
    }
    //set node information
    public date(String information[]){
        this.name = information[0];
        this.icon = information[1];
        this.advisor = information[2];
        this.president = information[3];
        this.officers = information[4];
        this.members = information[5];
        this.description = information[6]; 
    }
    
    public String toString(){
        return "string";
    }
    
    public void addNode(){
        

    }
    
}
