<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout
{
	private $CI;
	private $var = array();
    private $theme = 'default';
	
/*
|===============================================================================
| Constructeur
|===============================================================================
*/
	
    public function __construct()
    {
        $this->CI = get_instance();
	
        $this->var['output'] = '';
	
        //	Le titre est compos� du nom de la m�thode et du nom du contr�leur
        //	La fonction ucfirst permet d'ajouter une majuscule
        $this->var['titre'] = ucfirst($this->CI->router->fetch_method()) . ' - ' . ucfirst($this->CI->router->fetch_class());
	
        //	Nous initialisons la variable $charset avec la m�me valeur que
        //	la cl� de configuration initialis�e dans le fichier config.php
        $this->var['charset'] = $this->CI->config->item('charset');
        
        	$this->var['css'] = array();
            $this->var['js'] = array();
    }
	
/*
|===============================================================================
| M�thodes pour charger les vues
|	. view
|	. views
|===============================================================================
*/
	
	public function view($name, $data = array())
    {
        $this->var['output'] .= $this->CI->load->view($name, $data, true);
	
        $this->CI->load->view('../themes/' . $this->theme, $this->var);
    }
	
	public function views($name, $data = array())
	{
		$this->var['output'] .= $this->CI->load->view($name, $data, true);
		return $this;
	}
/*
|===============================================================================
| M�thodes pour ajouter des feuilles de CSS et de JavaScript
|	. ajouter_css
|	. ajouter_js
|===============================================================================
*/
    public function ajouter_css($nom)
    {
        if(is_string($nom) AND !empty($nom) AND file_exists('./assets/css/' . $nom . '.css'))
        {
            $this->var['css'][] = css_url($nom);
            return true;
        }
        return false;
    }

    public function ajouter_js($nom)
    {
        if(is_string($nom) AND !empty($nom) AND file_exists('./assets/javascript/' . $nom . '.js'))
        {
            $this->var['js'][] = js_url($nom);
            return true;
        }
        return false;
    }
    
    public function set_theme($theme)
    {   
        if(is_string($theme) AND !empty($theme) AND file_exists('./application/themes/' . $theme . '.php'))
        {
            $this->theme = $theme;
            return true;
        }
        return false;
    }
}