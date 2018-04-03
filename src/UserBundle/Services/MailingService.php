<?php

namespace UserBundle\Services;


use InvoiceBundle\Entity\Invoice;
use UserBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManager;

class MailingService 
{
    private $mailer;
    private $twig;
    private $container;
    private $entityManager;
    private $message;

    public function __construct($mailer, $twig, ContainerInterface $container, EntityManager $entityManager)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
        $this->container = $container;
        $this->entityManager = $entityManager;
    }

    /**
     * Send an email to the customer when it's LicenceFile is validated
     * @param LicenceFile $licenceFile
     * @return boolean
     */
    public function sendLicenceFileValidationMail(LicenceFile $licenceFile)
    {
        $this->message = \Swift_Message::newInstance();
        $logo = $this->message->embed(\Swift_Image::fromPath($this->container->get('request')->getSchemeAndHttpHost().$this->container->get('templating.helper.assets')->getUrl('bundles/afmpuser/images/logo_fat.png')));

        $typeMethod = 'get';
        switch ($licenceFile->getLicence()->getId()) {
            case 1:
                $typeMethod .= 'Hauturier'; 
            break;
            case 2:
                $typeMethod .= 'Cotier'; 
            break;
            case 3:
                case 4:
                    $typeMethod .= 'Fluvial'; 
            break;
            case 5:
                $typeMethod .= 'Crr'; 
            break;
        }
        foreach ($licenceFile->getReview()->getMaritimeaffairs()->getAddresses() as $address) {
            if ($address->$typeMethod()) {
                 $examAddress = $address->getAddress();
                 break;
            }
        }

        $user = $licenceFile->getCustomer()->getUsers()->first();
        $to = $licenceFile->getCadeau() ? $licenceFile->getSchool()->getEmail() : $user->getEmail();
        $subject = 'Validation de votre dossier';
        $data = array(
            'title'       => $subject,
            'logo'        => $logo,
            'user'        => $user,
            'school'      => $licenceFile->getSchool(),
            'licenceFile' => $licenceFile,
            'examAddress' => $examAddress
        );

        switch($licenceFile->getLicence()->getId()) {
            case 1:
                $template = 'AFMPClientBundle:Mail\Validation:validation_hauturier.email.twig';
            break;
            case 2:
                $template = 'AFMPClientBundle:Mail\Validation:validation_cotier.email.twig';
            break;
            case 3:
                $template = 'AFMPClientBundle:Mail\Validation:validation_eaux_interieures_allege.email.twig';
            break;
            case 4:
                $template = 'AFMPClientBundle:Mail\Validation:validation_eaux_interieures_complet.email.twig';
            break;
            case 5:
                $template = 'AFMPClientBundle:Mail\Validation:validation_crr.email.twig';
            break;
        }

        $body = $this->twig->render($template, $data);

        return $this->sendMail($licenceFile->getSchool()->getEmail(), $to, $subject, $body);
    }

    /**
     * Send an email to the customer when it's review date is validated
     * @param LicenceFile $licenceFile
     * @return boolean
     */
    public function sendReviewValidationMail(LicenceFile $licenceFile)
    {
        $this->message = \Swift_Message::newInstance();
        $logo = $this->message->embed(\Swift_Image::fromPath($this->container->get('request')->getSchemeAndHttpHost().$this->container->get('templating.helper.assets')->getUrl('bundles/afmpuser/images/logo_fat.png')));

        $typeMethod = 'get';
        switch ($licenceFile->getLicence()->getId()) {
            case 1:
                $typeMethod .= 'Hauturier'; 
            break;
            case 2:
                $typeMethod .= 'Cotier'; 
            break;
            case 3:
                case 4:
                    $typeMethod .= 'Fluvial'; 
            break;
            case 5:
                $typeMethod .= 'Crr'; 
            break;
        }
        $examAddress = $licenceFile->getReview()->getMaritimeaffairs()->getAddress();
        foreach ($licenceFile->getReview()->getMaritimeaffairs()->getAddresses() as $address) {
            if ($address->$typeMethod()) {
                 $examAddress = $address->getAddress();
                 break;
            }
        }

        $user = $licenceFile->getCustomer()->getUsers()->first();
        $to = $user->getEmail();
        $subject = 'Convocation à l\'examen';
        $data = array(
            'title'       => $subject,
            'logo'        => $logo,
            'user'        => $user,
            'school'      => $licenceFile->getSchool(),
            'licenceFile' => $licenceFile,
            'examAddress' => $examAddress
        );

        switch($licenceFile->getLicence()->getId()) {
            case 1:
                $template = 'AFMPClientBundle:Mail\Review:review_hauturier.email.twig';
            break;
            case 2:
                $template = 'AFMPClientBundle:Mail\Review:review_cotier.email.twig';
            break;
            case 3:
                $template = 'AFMPClientBundle:Mail\Review:review_eaux_interieures_allege.email.twig';
            break;
            case 4:
                $template = 'AFMPClientBundle:Mail\Review:review_eaux_interieures_complet.email.twig';
            break;
            case 5:
                $template = 'AFMPClientBundle:Mail\Review:review_crr.email.twig';
            break;
        }

        $body = $this->twig->render($template, $data);

        return $this->sendMail($licenceFile->getSchool()->getEmail(), $to, $subject, $body);
    }

    /**
     * Send an email to the customer when it's LicenceFile is closed
     * @param LicenceFile $licenceFile
     * @return boolean
     */
    public function sendLicenceFileClosingMail(LicenceFile $licenceFile)
    {

        $this->message = \Swift_Message::newInstance();
        $logo = $this->message->embed(\Swift_Image::fromPath($this->container->get('request')->getSchemeAndHttpHost().$this->container->get('templating.helper.assets')->getUrl('bundles/afmpuser/images/logo_fat.png')));

        $user = $licenceFile->getCustomer()->getUsers()->first();
        $to = $licenceFile->getCadeau() ? $licenceFile->getSchool()->getEmail() : $user->getEmail();
        $subject = 'AFMP vous remercie !';
        $data = array(
            'title'       => $subject,
            'logo'        => $logo,
            'user'        => $user,
            'school'      => $licenceFile->getSchool(),
            'licenceFile' => $licenceFile
        );
        $body = $this->twig->render('AFMPClientBundle:Mail:closed.email.twig', $data);

        return $this->sendMail($licenceFile->getSchool()->getEmail(), $to, $subject, $body);
    }

    /**
     * Send an email to the customer when it's LicenceFile is printable
     * @param LicenceFile $licenceFile
     * @return boolean
     */
    public function sendContractPrintableMail(LicenceFile $licenceFile)
    {
        $mail_formation = $mail_registration = true;

        $this->message = \Swift_Message::newInstance();
        $logo = $this->message->embed(\Swift_Image::fromPath($this->container->get('request')->getSchemeAndHttpHost().$this->container->get('templating.helper.assets')->getUrl('bundles/afmpuser/images/logo_fat.png')));

        $user = $licenceFile->getCustomer()->getUsers()->first();
        $to = $licenceFile->getCadeau() ? $licenceFile->getSchool()->getEmail() : $user->getEmail();
        $data = array(
            'logo'        => $logo,
            'user'        => $user,
            'school'      => $licenceFile->getSchool(),
            'licenceFile' => $licenceFile
        );

        switch($licenceFile->getLicence()->getId()) {
            case 1:
                $template = 'AFMPClientBundle:Mail\Printable:printable_hauturier';
            break;
            case 2:
                $template = 'AFMPClientBundle:Mail\Printable:printable_cotier';
            break;
            case 3:
                $template = 'AFMPClientBundle:Mail\Printable:printable_eaux_interieures_allege';
            break;
            case 4:
                $template = 'AFMPClientBundle:Mail\Printable:printable_eaux_interieures_complet';
            break;
            case 5:
                $template = 'AFMPClientBundle:Mail\Printable:printable_crr';
            break;
        }

        // Formation Mail
        $subject_formation = 'Dossier de formation';
        $data['title'] = $subject_formation;
        $body_formation = $this->twig->render($template.'_formation.email.twig', $data);
        $attachment_formation = $licenceFile->getUrlformationzip();

        $files = array();
        $zip = new \Archive_Zip($attachment_formation);
        $extracts = $zip->extract(array('add_path' => 'uploads/extract/'));
        foreach ($extracts as $file) {
            $files[] = str_replace('./', '', $file['filename']);
        }
        if ($licenceFile->getSendfiling()) {
            $mail_formation = $this->sendMail($licenceFile->getSchool()->getEmail(), $to, $subject_formation, $body_formation, $files);
        }

        // Registration Mail
        if ($licenceFile->getLicence()->getStandalonesending()) {
            $this->message = \Swift_Message::newInstance();
            $logo = $this->message->embed(\Swift_Image::fromPath($this->container->get('request')->getSchemeAndHttpHost().$this->container->get('templating.helper.assets')->getUrl('bundles/afmpuser/images/logo_fat.png')));

            $subject_registration = 'Dossier d\'inscription';
            $data['title'] = $subject_registration;
            $data['logo'] = $logo;
            $body_registration = $this->twig->render($template.'_registration.email.twig', $data);
            $attachment_registration = $licenceFile->getUrlregistrationzip();

            $files = array();
            $zip = new \Archive_Zip($attachment_registration);
            $extracts = $zip->extract(array('add_path' => 'uploads/extract/'));
            foreach ($extracts as $file) {
                $files[] = str_replace('./', '', $file['filename']);
            }
            if ($licenceFile->getSendfiling()) {
                $mail_registration = $this->sendMail($licenceFile->getSchool()->getEmail(), $to, $subject_registration, $body_registration, $files);
            }
        }

        if ($licenceFile->getTransfered()) {
            $url = "uploads/documents/transfert_".$licenceFile->getId().".pdf";
            $this->sendTransferMail($licenceFile, $url);
        }

        return $mail_formation && $mail_registration;
    }

    /**
     * Send an email to the customer when it's LicenceFile is printable and it needs to be transfered
     * @param LicenceFile $licenceFile
     * @param string $url
     * @return boolean
     */
    public function sendTransferMail(LicenceFile $licenceFile, $url)
    {
        $this->message = \Swift_Message::newInstance();
        $logo = $this->message->embed(\Swift_Image::fromPath($this->container->get('request')->getSchemeAndHttpHost().$this->container->get('templating.helper.assets')->getUrl('bundles/afmpuser/images/logo_fat.png')));

        $user = $licenceFile->getCustomer()->getUsers()->first();
        $to = $licenceFile->getCadeau() ? $licenceFile->getSchool()->getEmail() : $user->getEmail();
        $subject = 'Demande de transfert de dossier';
        $data = array(
            'title'       => $subject,
            'logo'        => $logo,
            'user'        => $user,
            'school'      => $licenceFile->getSchool(),
            'licenceFile' => $licenceFile
        );

        $body = $this->twig->render('AFMPClientBundle:Mail:transfer.email.twig', $data);

        if ($licenceFile->getSendfiling()) {
            $return = $this->sendMail($licenceFile->getSchool()->getEmail(), $to, $subject, $body, $url);
        } else {
            $return = true;
        }

        return $return;
    }

    /**
     * Send an email to the customer when it's Invoice is edited
     * @param Invoice $invoice
     * @return boolean
     */
    public function sendInvoiceEditionMail(Invoice $invoice)
    {
        $this->message = \Swift_Message::newInstance();
        $logo = $this->message->embed(\Swift_Image::fromPath($this->container->get('request')->getSchemeAndHttpHost().$this->container->get('templating.helper.assets')->getUrl('bundles/afmpuser/images/logo_fat.png')));

        //$user = $invoice->getClient()->getUsers()->first();
        $client = $invoice->getClient();
        $licenceFile = $invoice->getLicencefile();
        $subject = '[FACTURE '.$invoice->getNumber().'] : '.$client->getFirstname().' '.$client->getLastname();
        $data = array(
            'title'       => $subject,
            'logo'        => $logo,
            //'user'        => $user,
            'school'      => $licenceFile->getSchool(),
            'licenceFile' => $licenceFile,
            'invoice'     => $invoice,
            'client'      => $client
        );
        $body = $this->twig->render('AFMPClientBundle:Mail:invoice_edited.email.twig', $data);
        $attachment = $invoice->getUrlpdf();

        $emailAccounting = $this->entityManager->getRepository('AFMPUserBundle:Parameter')->findOneByParamkey('email_accounting');

        if ($emailAccounting) {
            return $this->sendMail($licenceFile->getSchool()->getEmail(), $emailAccounting->getParamvalue(), $subject, $body, $attachment);
        }

        return true;
    }

    /**
     * Send an email to the customer when it registers
     * @param User $user
     * @return boolean
     */
    public function sendRegistrationMail(User $user)
    {
        $this->message = \Swift_Message::newInstance();
        $logo = $this->message->embed(\Swift_Image::fromPath($this->container->get('request')->getSchemeAndHttpHost().$this->container->get('templating.helper.assets')->getUrl('bundles/main/images/logo.png')));

        $to = $user->getEmail();
        $subject = 'Bienvenue sur Bambou d\'Afrique Casablanca' ;
        $data = array(
            'title'  => $subject,
            'logo'   => $logo,
            'user'   => $user
        );
        $body = $this->twig->render('UserBundle:Mail:registration.email.twig', $data);

        //return $this->sendMail($licenceFile->getSchool()->getEmail(), $to, $subject, $body);

        return true;
    }

    /**
     * Generic email sending function
     * @param string $from
     * @param string $to
     * @param string $subject
     * @param string $body
     * @param string $attachment
     * @param string $bcc
     */
    public function sendMail($from, $to, $subject, $body, $attachment = null,$bcc = null)
    {
        $this->message = $this->message ? $this->message : \Swift_Message::newInstance();

        $this->message->setContentType('text/html')
                      ->setSubject($subject)
                      ->setFrom($from)
                      ->setTo($to)
                      ->setBcc($bcc)
                      ->setBody($body);

        if ($attachment) {
            if (is_array($attachment)) {
                foreach ($attachment as $key => $file) {
                    if (file_exists($file)) {
                        $this->message->attach(\Swift_Attachment::fromPath($file));
                    }
                }
            } else {
                $this->message->attach(\Swift_Attachment::fromPath($attachment));
            }
        }

        return $this->mailer->send($this->message);
    }

    /**
     * Send an email to the customer when payment is waiting
     * @param User $user
     * @return boolean
     */
    public function sendWaitingPayment(User $user)
    {
        $this->message = \Swift_Message::newInstance();
        $logo = $this->message->embed(\Swift_Image::fromPath($this->container->get('request')->getSchemeAndHttpHost().$this->container->get('templating.helper.assets')->getUrl('bundles/afmpuser/images/logo_fat.png')));
        $to = $user->getEmail();
        $licenceFile = $this->entityManager->getRepository('AFMPFilingBundle:LicenceFile')->findInprogressByUser($user->getId());

        $subject = 'INSCRIPTION PERMIS EAUX INTÉRIEURES';
        $body = $this->twig->render('AFMPClientBundle:Mail\Payment:payment_attente.email.twig', array('school'=>$licenceFile->getSchool(),'logo'=>$logo,'title'=>$subject, 'user'=>$user, 'licenceFileInProgress' => $licenceFile));

        return $this->sendMail($licenceFile->getSchool()->getEmail(), $to, $subject, $body );

    }

    /**
     * Send an email to the customer when payment is waiting
     * @param User $user
     * @return boolean
     */
    public function sendWaitingPerfectionnementPayment(User $user)
    {
        $this->message = \Swift_Message::newInstance();
        $logo = $this->message->embed(\Swift_Image::fromPath($this->container->get('request')->getSchemeAndHttpHost().$this->container->get('templating.helper.assets')->getUrl('bundles/afmpuser/images/logo_fat.png')));
        $to = $user->getEmail();
        $licenceFile = $this->entityManager->getRepository('AFMPFilingBundle:LicenceFile')->findInprogressByUser($user->getId());

        $subject = 'INSCRIPTION PERFECTIONNEMENT';
        $body = $this->twig->render('AFMPClientBundle:Mail\Payment:payment_attente_perfectionnement.email.twig', array('school'=>$licenceFile->getSchool(),'logo'=>$logo,'title'=>$subject, 'user'=>$user, 'licenceFileInProgress' => $licenceFile));

        return $this->sendMail($licenceFile->getSchool()->getEmail(), $to, $subject, $body );

    }

    /**
     * Send an email to the customer when payment is waiting
     * @param User $user
     * @return boolean
     */
    public function sendWaitingPaymentAgence(User $user)
    {
        $this->message = \Swift_Message::newInstance();
        $logo = $this->message->embed(\Swift_Image::fromPath($this->container->get('request')->getSchemeAndHttpHost().$this->container->get('templating.helper.assets')->getUrl('bundles/afmpuser/images/logo_fat.png')));
        $to = $user->getEmail();
        $licenceFile = $this->entityManager->getRepository('AFMPFilingBundle:LicenceFile')->findInprogressByUser($user->getId());

        $subject = 'INSCRIPTION PERMIS EAUX INTÉRIEURES';
        $body = $this->twig->render('AFMPClientBundle:Mail\Payment:payment_attente_agence.email.twig', array('school'=>$licenceFile->getSchool(),'logo'=>$logo,'title'=>$subject, 'user'=>$user, 'licenceFileInProgress' => $licenceFile));

        return $this->sendMail($licenceFile->getSchool()->getEmail(), $to, $subject, $body );

    }

    /**
     * Send an email to the customer when payment is waiting
     * @param User $user
     * @return boolean
     */
    public function sendWaitingPaymentAgencePerfectionnement(User $user)
    {
        $this->message = \Swift_Message::newInstance();
        $logo = $this->message->embed(\Swift_Image::fromPath($this->container->get('request')->getSchemeAndHttpHost().$this->container->get('templating.helper.assets')->getUrl('bundles/afmpuser/images/logo_fat.png')));
        $to = $user->getEmail();
        $licenceFile = $this->entityManager->getRepository('AFMPFilingBundle:LicenceFile')->findInprogressByUser($user->getId());

        $subject = 'INSCRIPTION PERFECTIONNEMENT';
        $body = $this->twig->render('AFMPClientBundle:Mail\Payment:payment_attente_agence_perfectionnement.email.twig', array('school'=>$licenceFile->getSchool(),'logo'=>$logo,'title'=>$subject, 'user'=>$user, 'licenceFileInProgress' => $licenceFile));

        return $this->sendMail($licenceFile->getSchool()->getEmail(), $to, $subject, $body );

    }

    /**
     * Send an email to the customer when payment is transfert
     * @param User $user
     * @return boolean
     */
    public function sendTransferPayment(User $user)
    {
        $this->message = \Swift_Message::newInstance();
        $logo = $this->message->embed(\Swift_Image::fromPath($this->container->get('request')->getSchemeAndHttpHost().$this->container->get('templating.helper.assets')->getUrl('bundles/afmpuser/images/logo_fat.png')));
        $to = $user->getEmail();
        $licenceFile = $this->entityManager->getRepository('AFMPFilingBundle:LicenceFile')->findInprogressByUser($user->getId());

        $subject = 'INSCRIPTION PERMIS EAUX INTÉRIEURES : RIB';
        $body = $this->twig->render('AFMPClientBundle:Mail\Payment:payment_transfert.email.twig', array('school'=>$licenceFile->getSchool(),'logo'=>$logo,'title'=>$subject, 'user'=>$user, 'licenceFileInProgress' => $licenceFile));
        $rib = "documents/ribAFMP.PNG";
        return $this->sendMail($licenceFile->getSchool()->getEmail(), $to, $subject, $body , $rib);

    }

    /**
     * Send an email to the customer when payment is valid
     * @param User $user
     * @return boolean
     */
    public function sendValidPayment(User $user)
    {
        $this->message = \Swift_Message::newInstance();
        $logo = $this->message->embed(\Swift_Image::fromPath($this->container->get('request')->getSchemeAndHttpHost().$this->container->get('templating.helper.assets')->getUrl('bundles/afmpuser/images/logo_fat.png')));
        $to = $user->getEmail();
        $licenceFile = $this->entityManager->getRepository('AFMPFilingBundle:LicenceFile')->findInprogressByUser($user->getId());

        $subject = 'VALIDATION PERMIS EAUX INTÉRIEURES';
        $body = $this->twig->render('AFMPClientBundle:Mail\Payment:payment_valide.email.twig', array('examAddress'=>$licenceFile->getReview()->getMaritimeaffairs(),'school'=>$licenceFile->getSchool(),'logo'=>$logo,'title'=>$subject, 'user'=>$user, 'licenceFileInProgress' => $licenceFile));
        $attachment_registration = $licenceFile->getUrlregistrationzip();

        $files = array();
        $zip = new \Archive_Zip($attachment_registration);
        $extracts = $zip->extract(array('add_path' => 'uploads/extract/'));
        foreach ($extracts as $file) {
            $files[] = str_replace('./', '', $file['filename']);
        }

        return $this->sendMail($licenceFile->getSchool()->getEmail(), $to, $subject, $body , $files);

    }

    /**
     * Send an email to the customer when payment is valid
     * @param User $user
     * @return boolean
     */
    public function sendValidPerfectionnementPayment(User $user)
    {
        $this->message = \Swift_Message::newInstance();
        $logo = $this->message->embed(\Swift_Image::fromPath($this->container->get('request')->getSchemeAndHttpHost().$this->container->get('templating.helper.assets')->getUrl('bundles/afmpuser/images/logo_fat.png')));
        $to = $user->getEmail();
        $licenceFile = $this->entityManager->getRepository('AFMPFilingBundle:LicenceFile')->findInprogressByUser($user->getId());

        $subject = 'VALIDATION PERFECTIONNEMENT';
        $body = $this->twig->render('AFMPClientBundle:Mail\Payment:payment_valide_perfectionnement.email.twig', array('examAddress'=>$licenceFile->getReview()->getMaritimeaffairs(),'school'=>$licenceFile->getSchool(),'logo'=>$logo,'title'=>$subject, 'user'=>$user, 'licenceFileInProgress' => $licenceFile));
        $attachment_registration = $licenceFile->getUrlregistrationzip();

        $files = array();
        $zip = new \Archive_Zip($attachment_registration);
        $extracts = $zip->extract(array('add_path' => 'uploads/extract/'));
        foreach ($extracts as $file) {
            $files[] = str_replace('./', '', $file['filename']);
        }

        return $this->sendMail($licenceFile->getSchool()->getEmail(), $to, $subject, $body , $files);

    }


    /**
     * Send an email to the customer when payment is valid
     * @param User $user
     * @return boolean
     */
    public function sendELearningAccess(User $user)
    {
        $this->message = \Swift_Message::newInstance();
        $logo = $this->message->embed(\Swift_Image::fromPath($this->container->get('request')->getSchemeAndHttpHost().$this->container->get('templating.helper.assets')->getUrl('bundles/afmpuser/images/logo_fat.png')));
        $to = $user->getEmail();
        $licenceFile = $this->entityManager->getRepository('AFMPFilingBundle:LicenceFile')->findInprogressByUser($user->getId());

        $subject = 'ACCES E-LEARNING';
        $body = $this->twig->render('AFMPClientBundle:Mail:e-learning.email.twig', array('school'=>$licenceFile->getSchool(),'logo'=>$logo,'title'=>$subject, 'user'=>$user));

        return $this->sendMail($licenceFile->getSchool()->getEmail(), $to, $subject, $body, null,'afm.plaisance@gmail.com');

    }
}