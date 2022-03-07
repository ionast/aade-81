<?php

namespace Firebed\AadeMyData\Enums;

enum ExpenseClassificationType: string
{
    /**
     *  Εμπορεύματα έναρξης
     */
    case E3_101 = "E3_101";


    /**
     *  Αγορές εμπορευμάτων χρήσης (καθαρό ποσό)/Χονδρικές
     */
    case E3_102_001 = "E3_102_001";


    /**
     *  Αγορές εμπορευμάτων χρήσης (καθαρό ποσό)/Λιανικές
     */
    case E3_102_002 = "E3_102_002";


    /**
     *  Αγορές εμπορευμάτων χρήσης (καθαρό ποσό)/Αγαθών του άρθρου 39α παρ.5 του Κώδικα Φ.Π.Α. (ν.2859/2000)
     */
    case E3_102_003 = "E3_102_003";


    /**
     *  Αγορές εμπορευμάτων χρήσης (καθαρό ποσό)/Εξωτερικού Ενδοκοινοτικές
     */
    case E3_102_004 = "E3_102_004";


    /**
     *  Αγορές εμπορευμάτων χρήσης (καθαρό ποσό)/Εξωτερικού Τρίτες Χώρες
     */
    case E3_102_005 = "E3_102_005";


    /**
     *  Αγορές εμπορευμάτων χρήσης (καθαρό ποσό)Λοιπά
     */
    case E3_102_006 = "E3_102_006";


    /**
     *  Εμπορεύματα λήξης
     */
    case E3_104 = "E3_104";


    /**
     *  Πρώτες ύλες και υλικά έναρξης/Παραγωγή
     */
    case E3_201 = "E3_201";


    /**
     *  Αγορές πρώτων υλών και υλικών χρήσης (καθαρό ποσό)/Χονδρικές
     */
    case E3_202_001 = "E3_202_001";


    /**
     *  Αγορές πρώτων υλών και υλικών χρήσης (καθαρό ποσό)/Λιανικές
     */
    case E3_202_002 = "E3_202_002";


    /**
     *  Αγορές πρώτων υλών και υλικών χρήσης (καθαρό ποσό)/Εξωτερικού Ενδοκοινοτικές
     */
    case E3_202_003 = "E3_202_003";


    /**
     *  Αγορές πρώτων υλών και υλικών χρήσης (καθαρό ποσό)/Εξωτερικού Τρίτες Χώρες
     */
    case E3_202_004 = "E3_202_004";


    /**
     *  Αγορές πρώτων υλών και υλικών χρήσης (καθαρό ποσό)/Λοιπά
     */
    case E3_202_005 = "E3_202_005";


    /**
     *  Αποθέματα λήξης πρώτων υλών και υλικών/Παραγωγή
     */
    case E3_204 = "E3_204";


    /**
     *  Προϊόντα και παραγωγή σε εξέλιξη έναρξης/Παραγωγή
     */
    case E3_207 = "E3_207";


    /**
     *  Προϊόντα και παραγωγή σε εξέλιξη λήξης/Παραγωγή
     */
    case E3_209 = "E3_209";


    /**
     *  Πρώτες ύλες και υλικά έναρξης/Αγροτική
     */
    case E3_301 = "E3_301";


    /**
     *  Αγορές πρώτων υλών και υλικών χρήσης (καθαρό ποσό)/Χονδρικές
     */
    case E3_302_001 = "E3_302_001";


    /**
     *  Αγορές πρώτων υλών και υλικών χρήσης (καθαρό ποσό)/Λιανικές
     */
    case E3_302_002 = "E3_302_002";


    /**
     *  Αγορές πρώτων υλών και υλικών χρήσης (καθαρό ποσό)/Εξωτερικού Ενδοκοινοτικές
     */
    case E3_302_003 = "E3_302_003";


    /**
     *  Αγορές πρώτων υλών και υλικών χρήσης (καθαρό ποσό)/Εξωτερικού Τρίτες Χώρες
     */
    case E3_302_004 = "E3_302_004";


    /**
     *  Αγορές πρώτων υλών και υλικών χρήσης (καθαρό ποσό)/Λοιπά
     */
    case E3_302_005 = "E3_302_005";


    /**
     *  Αποθέματα λήξης πρώτων υλών και υλικών/Αγροτική
     */
    case E3_304 = "E3_304";


    /**
     *  Προϊόντα και παραγωγή σε εξέλιξη έναρξης/Αγροτική
     */
    case E3_307 = "E3_307";


    /**
     *  Προϊόντα και παραγωγή σε εξέλιξη λήξης/Αγροτική
     */
    case E3_309 = "E3_309";


    /**
     *  Αποθέματα έναρξης (ζώων - φυτών)
     */
    case E3_312 = "E3_312";


    /**
     *  Αγορές ζώων - φυτών (καθαρό ποσό)/Χονδρικές
     */
    case E3_313_001 = "E3_313_001";


    /**
     *  Αγορές ζώων - φυτών (καθαρό ποσό)/Λιανικές
     */
    case E3_313_002 = "E3_313_002";


    /**
     *  Αγορές ζώων - φυτών (καθαρό ποσό)/Εξωτερικού Ενδοκοινοτικές
     */
    case E3_313_003 = "E3_313_003";


    /**
     *  Αγορές ζώων - φυτών (καθαρό ποσό)/Εξωτερικού Τρίτες Χώρες
     */
    case E3_313_004 = "E3_313_004";


    /**
     *  Αγορές ζώων - φυτών (καθαρό ποσό)/Λοιπά
     */
    case E3_313_005 = "E3_313_005";


    /**
     *  Αποθέματα τέλους (ζώων - φυτών)/Αγροτική
     */
    case E3_315 = "E3_315";


    /**
     *  Παροχές σε εργαζόμενους/Μικτές αποδοχές
     */
    case E3_581_001 = "E3_581_001";


    /**
     *  Παροχές σε εργαζόμενους/Εργοδοτικές εισφορές
     */
    case E3_581_002 = "E3_581_002";


    /**
     *  Παροχές σε εργαζόμενους/Λοιπές παροχές
     */
    case E3_581_003 = "E3_581_003";


    /**
     *  Ζημιές επιμέτρησης περιουσιακών στοιχείων
     */
    case E3_582 = "E3_582";


    /**
     *  Χρεωστικές συναλλαγματικές διαφορές
     */
    case E3_583 = "E3_583";


    /**
     *  Ζημιές από διάθεση-απόσυρση μη κυκλοφορούντων περιουσιακών στοιχείων
     */
    case E3_584 = "E3_584";


    /**
     *  Προμήθειες διαχείρισης ημεδαπής - αλλοδαπής (management fees)
     */
    case E3_585_001 = "E3_585_001";


    /**
     *  Δαπάνες από συνδεδεμένες επιχειρήσεις
     */
    case E3_585_002 = "E3_585_002";


    /**
     *  Δαπάνες από μη συνεργαζόμενα κράτη ή από κράτη με προνομιακό φορολογικό καθεστώς
     */
    case E3_585_003 = "E3_585_003";


    /**
     *  Δαπάνες για ενημερωτικές ημερίδες
     */
    case E3_585_004 = "E3_585_004";


    /**
     *  Έξοδα υποδοχής και φιλοξενίας
     */
    case E3_585_005 = "E3_585_005";


    /**
     *  Έξοδα ταξιδιών
     */
    case E3_585_006 = "E3_585_006";


    /**
     *  Ασφαλιστικές Εισφορές Αυτοαπασχολούμενων
     */
    case E3_585_007 = "E3_585_007";


    /**
     *  Έξοδα και προμήθειες παραγγελιοδόχου για λογαριασμό αγροτών
     */
    case E3_585_008 = "E3_585_008";


    /**
     *  Λοιπές Αμοιβές για υπηρεσίες ημεδαπής
     */
    case E3_585_009 = "E3_585_009";


    /**
     *  Λοιπές Αμοιβές για υπηρεσίες αλλοδαπής
     */
    case E3_585_010 = "E3_585_010";


    /**
     *  Ενέργεια
     */
    case E3_585_011 = "E3_585_011";


    /**
     *  Ύδρευση
     */
    case E3_585_012 = "E3_585_012";


    /**
     *  Τηλεπικοινωνίες
     */
    case E3_585_013 = "E3_585_013";


    /**
     *  Ενοίκια
     */
    case E3_585_014 = "E3_585_014";


    /**
     *  Διαφήμιση και προβολή
     */
    case E3_585_015 = "E3_585_015";


    /**
     *  Λοιπά έξοδα
     */
    case E3_585_016 = "E3_585_016";


    /**
     *  Χρεωστικοί τόκοι και συναφή έξοδα
     */
    case E3_586 = "E3_586";


    /**
     *  Αποσβέσεις
     */
    case E3_587 = "E3_587";


    /**
     *  Ασυνήθη έξοδα, ζημιές και πρόστιμα
     */
    case E3_588 = "E3_588";


    /**
     *  Προβλέψεις (εκτός από προβλέψεις για το προσωπικό)
     */
    case E3_589 = "E3_589";


    /**
     *  Αγορές ενσώματων παγίων χρήσης/Χονδρικές
     */
    case E3_882_001 = "E3_882_001";


    /**
     *  Αγορές ενσώματων παγίων χρήσης/Λιανικές
     */
    case E3_882_002 = "E3_882_002";


    /**
     *  Αγορές ενσώματων παγίων χρήσης/Εξωτερικού Ενδοκοινοτικές
     */
    case E3_882_003 = "E3_882_003";


    /**
     *  Αγορές ενσώματων παγίων χρήσης/Εξωτερικού Τρίτες Χώρες
     */
    case E3_882_004 = "E3_882_004";


    /**
     *  Αγορές μη ενσώματων παγίων χρήσης/Χονδρικές
     */
    case E3_883_001 = "E3_883_001";


    /**
     *  Αγορές μη ενσώματων παγίων χρήσης/Λιανικές
     */
    case E3_883_002 = "E3_883_002";


    /**
     *  Αγορές μη ενσώματων παγίων χρήσης/Εξωτερικού Ενδοκοινοτικές
     */
    case E3_883_003 = "E3_883_003";


    /**
     *  Αγορές μη ενσώματων παγίων χρήσης/Εξωτερικού Τρίτες Χώρες
     */
    case E3_883_004 = "E3_883_004";


    /**
     *  Αγορές & δαπάνες στο εσωτερικό της χώρας
     */
    case VAT_361 = "VAT_361";


    /**
     *  Αγορές & εισαγωγές επενδ. Αγαθών (πάγια)
     */
    case VAT_362 = "VAT_362";


    /**
     *  Λοιπές εισαγωγές εκτός επενδ. Αγαθών (πάγια)
     */
    case VAT_363 = "VAT_363";


    /**
     *  Ενδοκοινοτικές αποκτήσεις αγαθών
     */
    case VAT_364 = "VAT_364";


    /**
     *  Ενδοκοινοτικές λήψεις υπηρεσιών άρθρ. 14.2.α
     */
    case VAT_365 = "VAT_365";


    /**
     *  Λοιπές πράξεις λήπτη
     */
    case VAT_366 = "VAT_366";

    /**
     *  Απομείωση εμπορευμάτων
     */
    case E3_103 = "E3_103";


    /**
     *  Απομείωση πρώτων υλών και υλικών
     */
    case E3_203 = "E3_203";


    /**
     *  Απομείωση πρώτων υλών και υλικών
     */
    case E3_303 = "E3_303";


    /**
     *  Απομείωση προϊόντων και παραγωγής σε εξέλιξη
     */
    case E3_208 = "E3_208";


    /**
     *  Απομείωση προϊόντων και παραγωγής σε εξέλιξη
     */
    case E3_308 = "E3_308";


    /**
     * Απομείωση ζώων - φυτών – εμπορευμάτων
     */
    case E3_314 = "E3_314";


    /**
     * Ιδιοπαραγωγή παγίων - Αυτοπαραδόσεις - Καταστροφές αποθεμάτων
     */
    case E3_106 = "E3_106";


    /**
     * Ιδιοπαραγωγή παγίων - Αυτοπαραδόσεις - Καταστροφές αποθεμάτων
     */
    case E3_205 = "E3_205";


    /**
     * Ιδιοπαραγωγή παγίων - Αυτοπαραδόσεις - Καταστροφές αποθεμάτων
     */
    case E3_305 = "E3_305";


    /**
     * Ιδιοπαραγωγή παγίων - Αυτοπαραδόσεις - Καταστροφές αποθεμάτων
     */
    case E3_210 = "E3_210";


    /**
     * Ιδιοπαραγωγή παγίων - Αυτοπαραδόσεις - Καταστροφές αποθεμάτων
     */
    case E3_310 = "E3_310";


    /**
     * Ιδιοπαραγωγή παγίων - Αυτοπαραδόσεις - Καταστροφές αποθεμάτων
     */
    case E3_318 = "E3_318";


    /**
     * Αγορές αγαθών που υπάγονται σε ΕΦΚ
     */
    case E3_598_002 = "E3_598_002";


}