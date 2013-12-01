<?php

/**
 * Description of CreateurType
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjetType extends AbstractType 
{

    private $class;

    /**
     * @param string $class The Projet class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('nomProjet', 'text', array('label' => 'Nom du projet: '))
                ->add('dateCreationProjet', 'date', array(
                    'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy', 'label' => 'Date de début: ', 'required' => true))
                
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'intention' => 'create_projet',
        ));
    }

    public function getName()
    {
        return 'ladix_projet';
    }

}
?>

