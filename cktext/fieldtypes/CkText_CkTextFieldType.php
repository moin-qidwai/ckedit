<?php
namespace Craft;

ini_set('memory_limit','1024M');

class CkText_CkTextFieldType extends BaseFieldType
{
    public function getName()
    {
        return Craft::t('CKRich Text Field');
    }

    /**
     * @inheritDoc IFieldType::prepValue()
     *
     * @param mixed $value
     *
     * @return mixed
     */
    public function prepValue($value)
    {
        if ($value)
        {
            // Prevent everyone from having to use the |raw filter when outputting RTE content
            $charset = craft()->templates->getTwig()->getCharset();
            return new RichTextData($value, $charset);
        }
        else
        {
            return null;
        }
    }

    public function getInputHtml($name, $value)
    {
        return craft()->templates->render('cktext/field/input', array(
            'name'  => $name,
            'value' => $value
        ));
    }
}