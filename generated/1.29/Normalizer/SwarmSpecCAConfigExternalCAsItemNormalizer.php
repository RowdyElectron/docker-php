<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_29\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SwarmSpecCAConfigExternalCAsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\V1_29\\Model\\SwarmSpecCAConfigExternalCAsItem') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_29\Model\SwarmSpecCAConfigExternalCAsItem) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_29\Model\SwarmSpecCAConfigExternalCAsItem();
        if (property_exists($data, 'Protocol')) {
            $object->setProtocol($data->{'Protocol'});
        }
        if (property_exists($data, 'URL')) {
            $object->setURL($data->{'URL'});
        }
        if (property_exists($data, 'Options')) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Options'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setOptions($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getProtocol()) {
            $data->{'Protocol'} = $object->getProtocol();
        }
        if (null !== $object->getURL()) {
            $data->{'URL'} = $object->getURL();
        }
        if (null !== $object->getOptions()) {
            $values = new \stdClass();
            foreach ($object->getOptions() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'Options'} = $values;
        }

        return $data;
    }
}
