<?php

/*
 * This file is part of JoliCode's Forecast PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Forecast\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PlaceholdersIdGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Forecast\\Api\\Model\\PlaceholdersIdGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\PlaceholdersIdGetResponse200' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\PlaceholdersIdGetResponse200();
        if (property_exists($data, 'placeholder') && null !== $data->{'placeholder'}) {
            $object->setPlaceholder($this->denormalizer->denormalize($data->{'placeholder'}, 'JoliCode\\Forecast\\Api\\Model\\Placeholder', 'json', $context));
        } elseif (property_exists($data, 'placeholder') && null === $data->{'placeholder'}) {
            $object->setPlaceholder(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPlaceholder()) {
            $data->{'placeholder'} = $this->normalizer->normalize($object->getPlaceholder(), 'json', $context);
        } else {
            $data->{'placeholder'} = null;
        }

        return $data;
    }
}
