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
public class organization {
    
    public String name;
    public String icon;
    public String advisor;
    public String president;
    public String officers;
    public String members;
    public String description;
    private String mtab = "    ";
    
    
    
    public organization(){
        name = "";
        icon = "";
        advisor = "";
        president = "";
        officers = "";
        members = "";
        description = "";
    }
    //set node information
    public organization(String information[]){
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
    
    public String toStart(){
        
        return mtab + "<organization>";
    }
    
    public String toEnd(){
        
        return mtab + "</organization>";
    }
    
    public String toName(){
        return (mtab + mtab + "<name> "+ this.name + " </name>");
    }
    
    public String toIcon(){
        return (mtab + mtab + "<icon> " + this.icon + " </icon>");
    }
    
    public String toAdvisor(){
        return (mtab + mtab + "<advisor> " + this.advisor + " </advisor>");
    }
    
    public String toPresident(){
        return (mtab + mtab + "<president> " + this.president + " </president>");
    }
    
    public String toOfficers(){
        return (mtab + mtab + "<officers> " + this.officers + " </officers>");
    }
    
    public String toMembers(){
        return (mtab + mtab + "<members> " + this.members + " </members>");
    }
    
    public String toDescription(){
        return (mtab + mtab + "<description> " + this.description + " </description>");
    }

    public void addNode(){
        

    }
    
}
