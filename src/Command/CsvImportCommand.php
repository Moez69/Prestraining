<?php

namespace App\Command;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Developer;
use League\Csv\Reader;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Repository\DeveloperRepository;
use Symfony\Component\Templating\PhpEngine;
use App\service\update;


class CsvImportCommand extends ContainerAwareCommand
{
    /** 
     * $var ObjectManager
     */
     private $em;
    public function __construct(ObjectManager $em,update $update)
    {
        parent::__construct();
        $this->em = $em ;
        $this->update = $update ;
    }
    
    protected function configure()
    {
      $this
        ->setName('csv:import')
        ->setDescription('Imports a CSV file');
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $io=new SymfonyStyle($input, $output);
      $io->title('import file');
       $read = Reader::createFromPath ('src/Data/data_import_developers_big.csv');
       $results=$read->fetchAssoc();
       
       $message=false;
       
       foreach($results as $row)
       {
           $developer = (new Developer())
            ->setLASTNAME($row['LASTNAME'])
            ->setFIRSTNAME($row['FIRSTNAME'])
            ->setBADGELABEL($row['BADGE LABEL'])
            ->setLEVEL($row['BADGE LEVEL'])
            ;
            $this->em->persist($developer);
       }
      
       $this->em->flush();
       $io->success('success import file');
       $message=true;
       $this->update->setmessage($message);
        
    }

   
    



}
