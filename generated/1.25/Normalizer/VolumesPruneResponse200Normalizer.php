<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_25\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class VolumesPruneResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\V1_25\\Model\\VolumesPruneResponse200') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_25\Model\VolumesPruneResponse200) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_25\Model\VolumesPruneResponse200();
        if (property_exists($data, 'VolumesDeleted')) {
            $values = [];
            foreach ($data->{'VolumesDeleted'} as $value) {
                $values[] = $value;
            }
            $object->setVolumesDeleted($values);
        }
        if (property_exists($data, 'SpaceReclaimed')) {
            $object->setSpaceReclaimed($data->{'SpaceReclaimed'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getVolumesDeleted()) {
            $values = [];
            foreach ($object->getVolumesDeleted() as $value) {
                $values[] = $value;
            }
            $data->{'VolumesDeleted'} = $values;
        }
        if (null !== $object->getSpaceReclaimed()) {
            $data->{'SpaceReclaimed'} = $object->getSpaceReclaimed();
        }

        return $data;
    }
}
