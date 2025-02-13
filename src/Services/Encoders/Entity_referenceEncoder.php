<?php


namespace Drupal\io_utils\Services\Encoders;



class Entity_referenceEncoder extends AbstractFieldEncoder implements FieldEncoderInterface
{
    /**
     * @inheritDoc
     */
    public function encodeItem($value)
    {
      return [
        'target_id' => $value->get('target_id')->getValue()
      ];
    }
}
