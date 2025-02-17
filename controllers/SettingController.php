<?php
class SettingController extends TableController
{
    private $conn;
    private $table;
    private $primary_key;
    private $foreign_key;
    public function __construct(Database $database)
    {
        $this->conn = $database->getConnection();
        $this->table = "settings";
        parent::__construct($database, $this->table);
    }
    public function getSettings($element)
    {
        switch ($element) {
            case 'f1':
                return (in_array($element,$this->get_by_id(1)['data'] ) ) ?   "System Name":  $this->get_by_id(1)['data']['f1'];
                break;
            case 'f2':
                return (in_array($element,$this->get_by_id(1)['data'] ) ) ? "Syatem Full Name": $this->get_by_id(1)['data']['f2']  ;
                break;
            case 'f3':
                return (in_array($element,$this->get_by_id(1)['data'] ) ) ?  "Admin Email": $this->get_by_id(1)['data']['f3'] ;
                break;
            case 'f4':
                return (in_array($element,$this->get_by_id(1)['data'] ) ) ?  "Phone Number" :$this->get_by_id(1)['data']['f4'];
                break;
            case 'f5':
                return (in_array($element,$this->get_by_id(1)['data'] ) ) ? "Email": $this->get_by_id(1)['data']['f5'];
                break;
            case 'f6':
                return (in_array($element,$this->get_by_id(1)['data'] ) ) ? "Address": $this->get_by_id(1)['data']['f6'];
                break;
            case 'f7':
                return (in_array($element,$this->get_by_id(1)['data'] ) ) ? "Facebook": $this->get_by_id(1)['data']['f7'];
                break;
            case 'f8':
                return (in_array($element,$this->get_by_id(1)['data'] ) ) ? "Twitter": $this->get_by_id(1)['data']['f8'];
                break;
            case 'f9':
                return (in_array($element,$this->get_by_id(1)['data'] ) ) ? "Instragram": $this->get_by_id(1)['data']['f9'];
                break;
            case 'f10':
                return (in_array($element,$this->get_by_id(1)['data'] ) ) ? "Youtube": $this->get_by_id(1)['data']['f10'];
                break;
            case 'f11':
                return (in_array($element,$this->get_by_id(1)['data'] ) ) ? "Linkedin": $this->get_by_id(1)['data']['f11'];
                break;
            case 'f12':
                return (in_array($element,$this->get_by_id(1)['data'] ) ) ? "Address": $this->get_by_id(1)['data']['f12'];
                break;
            case 'f13':
                return (in_array($element,$this->get_by_id(1)['data'] ) ) ? "Contact Info": $this->get_by_id(1)['data']['f13'];
                break;
            case 'f14':
                return (in_array($element,$this->get_by_id(1)['data'] ) ) ? "Fax Number": $this->get_by_id(1)['data']['f14'];
                break;
            case 'f15':
                return (in_array($element,$this->get_by_id(1)['data'] ) ) ? "Open Time": $this->get_by_id(1)['data']['f15'];
                break;
            case 'f16':
                return (in_array($element,$this->get_by_id(1)['data'] ) ) ? "Condition": $this->get_by_id(1)['data']['f16'];
                break;
            case 'img1':
                return (in_array($element,$this->get_by_id(1)['data'] ) )?  "favicon": $this->get_by_id(1)['data']['img1'] ;
                break;
            case 'img2':
                return (in_array($element,$this->get_by_id(1)['data'] ) )?  "Header Logo": $this->get_by_id(1)['data']['img2'] ;
                break;
            case 'img3':
                return (in_array($element,$this->get_by_id(1)['data'] ) )? "Footer Logo": $this->get_by_id(1)['data']['img3'] ;
                break;
            case 'img4':
                return (in_array($element,$this->get_by_id(1)['data'] ) )?  "Backend Logo" : $this->get_by_id(1)['data']['img4'] ;
                break;
            case 'img5':
                return (in_array($element,$this->get_by_id(1)['data'] ) )?  "Backend Nav Logo": $this->get_by_id(1)['data']['img5']  ;
                break;
            default:
            return  (in_array($element,$this->get_by_id(1)['data'] ) )? $this->get_by_id(1)['data'][$element] : "";
        }
    }
}
