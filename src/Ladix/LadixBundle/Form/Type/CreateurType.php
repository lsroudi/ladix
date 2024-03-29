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

class CreateurType extends AbstractType 
{

    private $class;

    /**
     * @param string $class The Createur class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('nomCreateur', 'text', array('label' => 'Nom :'))
                ->add('prenomCreateur', 'text', array('label' => 'Prenom :'))
                ->add('emailCreateur', 'text', array('label' => 'Email :'))
                ->add('dateNaissanceCreateur', 'date', array('required' => true, 'widget' => 'choice', 'label' => ' ', 'years' => range(1915, 1999), 'format' => 'dd-MM-yyyy', 'empty_value' => array('year' => 'Année', 'month' => 'Mois', 'day' => 'Jour'), 'invalid_message' => 'Veuillez entrer une date de naissance valide'))

        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'intention' => 'create_createur',
        ));
    }

    public function getName()
    {
        return 'ladix_createur';
    }

}
?>

